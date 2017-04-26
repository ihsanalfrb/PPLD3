@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Categories</h1>
      <hr>
      <div class="columns" style="height:62vh">
        <div class="column is-3 part1">
          <h4>Pilih kategori batik berdasarkan:</h4>
          <br/>
          <p id="asal" > <a onclick="show_daerah()" href="#asal">asal daerah </a> </p>
          <p id="pola" >  <a onclick="show_clusters()" href="#pola"> pola </a></p>
        </div>
        <div class="column is-3 part2">

        </div>
        <div class="column is-6 part3" style="overflow:auto; ">

        </div>

      </div>
    </div>

    <script>
      var asal_daerahs = '{{json_encode($asal_daerahs)}}';
      asal_daerahs = JSON.parse(asal_daerahs.replace(/&quot;/g,'"'));

      var clusters = '{{json_encode($clusters)}}';
      clusters = JSON.parse(clusters.replace(/&quot;/g,'"'));

      var filter = '';
      var kategori ='';

      $(document).ready(function() {

        $('#nav_categories').addClass("is-active");

        if(window.location.hash) {
          var splittedHash = window.location.hash.substring(1).split("="); //Puts hash in variable, and removes the # character

          if(splittedHash[0] === 'asal'){
            show_daerah();
            filter = splittedHash[0];

            if(splittedHash.length > 1 && asal_daerahs[splittedHash[1]]){
              kategori = splittedHash[1];
              show_batik_daerah(kategori);
            }
          }else if(splittedHash[0] ==='pola'){
            show_clusters();
            filter = splittedHash[0];

            if(splittedHash.length > 1 && clusters[splittedHash[1]]){
              kategori = splittedHash[1];
              show_batik_cluster(kategori);
            }
          }


        }
      });

      function show_daerah(){
        var container = '<h4>Pilih asal daerah batik</h4><br/>';
        $.each(asal_daerahs, function(key,value){
          container += '<p id="asal_'+key+'" ><a onclick="show_batik_daerah(\''+key+'\')" href="#asal='+key+'">'+key+'</a></p>';
        });
        filter = 'asal';
        kategori = '';
        $('.part2').html(container);
        $('#asal').html('asal daerah');
        $('#pola').html('<a onclick="show_clusters()" href="#pola"> pola </a>');
        $('.part3').html('');
      }

      function show_clusters(){
        var container = '<h4>Pilih pola batik</h4><br/>';
        $.each(clusters, function(key,value){
          container += '<p id="pola_'+key+'"><a onclick="show_batik_cluster(\''+key+'\')" href="#pola='+key+'">'+key+'</a></p>';
        });
        filter = 'pola';
        kategori = '';
        $('.part2').html(container);
        $('#asal').html('<a onclick="show_daerah()" href="#asal">asal daerah </a>');
        $('#pola').html('pola');
        $('.part3').html('');
      }

      function show_batik_daerah(asal_daerah){
        var container = '<h4>Batik yang berasal dari '+asal_daerah+' </h4><br/>';

        if(kategori !== ''){
          $('#asal_'+kategori+'').html('<a onclick="show_batik_daerah(\''+kategori+'\')" href="#asal='+kategori+'">'+kategori+'</a>');
        }
        kategori = asal_daerah;

        $('#asal_'+kategori+'').html(kategori);

        $.each(asal_daerahs[asal_daerah], function(key,value){

          container += display_batik(value);
        });
        $('.part3').html(container);
      }

      function display_batik(value){
        var container ='';
        var url = '{{ action('PageController@rincian_informasi',':id')}}';

        //container += '<p>'+value['nama_batik']+' .' + '</p>';
        container += '<div class="columns">';
        container +=  '<div class="column is-2">';
        container +=    '<img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/'+value['gambar_pola_batik']+'" alt="">';
        container +=  '</div>';
        container +=  '<div class="column is-6">';
        container +=    '<h3><a href="'+url.replace(':id', value['id'])+'">'+value['nama_batik']+'</a></h3>';
        container +=    '<p>Asal Batik: '+value['asal_daerah']+'';
        container +=    '<p>Jenis Pola: ';

        if(!value['cluster_batik'] || value['cluster_batik'] === '')
          container +=    '<i>pola belum dikenal</i>';
        else
          container +=    value['cluster_batik'] + '</p>';

        container +=  '</div>';
        container += '</div>';

        return container;
      }

      function show_batik_cluster(cluster){
        var container = '<h4>Batik dengan pola '+cluster+' </h4><br/>';
        if(cluster === 'uncategorized'){
          var container = '<h4>Batik dengan pola belum dikenal </h4><br/>';
        }

        if(kategori !== ''){
          $('#pola_'+kategori+'').html('<a onclick="show_batik_cluster(\''+kategori+'\')" href="#pola='+kategori+'">'+kategori+'</a>');
        }
        kategori = cluster;

        $('#pola_'+kategori+'').html(kategori);

        $.each(clusters[cluster], function(key,value){
          container += display_batik(value);

        });
        $('.part3').html(container);
      }
    </script>
@endsection
