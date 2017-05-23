@extends('layouts.app')

@section('content')

    <div class="container">
      <hr>
      <h1 class="title is-2">Categories</h1>
      <hr>
      <div class="columns" style="height:62vh">
        <div class="column is-4 part1">
          <h4 class="title is-4">Pilih kategori batik:</h4>
          <br/>
          <div class="columns list-content">
            <div class="column is-6">
              <div class="card hero is-primary">
                <div class="card-image">
                  <figure class="image">
                    <a onclick="show_daerah()" href="#asal">
                      <img class="is-medium is-1" src="{{ URL::asset('images/map.png')}}"></a>
                  </figure>
                </div>
                <div class="card-content has-text-centered">
                  <div class="content">
                    <h3 id="asal" class="subtitle is-5"><a onclick="show_daerah()" href="#asal">Asal daerah</a></h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="column is-6">
              <div class="card hero is-primary">
                <div class="card-image">
                  <figure class="image">
                    <a onclick="show_clusters()" href="#pola"><img class="is-medium is-1" src="{{ URL::asset('images/group.png')}}"></a>
                  </figure>
                </div>
                <div class="card-content has-text-centered">
                  <div class="content">
                    <h3 id="pola" class="subtitle is-5"><a onclick="show_clusters()" href="#pola">Cluster/Pola</a></h3>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="column is-4 part2">

        </div>
        <div class="column is-4 part3" style="overflow:auto; ">

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
        var container = '<h4 class="title is-4">Pilih asal daerah batik:</h4><br/><div class="columns list-content"><div class="column"><table class="table"><tbody>';
        $.each(asal_daerahs, function(key,value){
          container += '<tr class="subtitle is-5"><th id="asal_'+key+'"><a class="subtitle is-5" onclick="show_batik_daerah(\''+key+'\')" href="#asal='+key+'">'+key+'</a></th></tr>';
        });
        container += '</tbody></table></div></div>';
        filter = 'asal';
        kategori = '';
        $('.part2').html(container);
        $('.part2').focus();
        $('#asal').html('Asal daerah');
        $('#pola').html('<a onclick="show_clusters()" href="#pola"> Custer/Pola </a>');
        $('.part3').html('');
      }

      function show_clusters(){
        var container = '<h4 class="title is-4">Pilih cluster/pola batik:</h4><br/><div class="columns list-content"><div class="column"><table class="table"><tbody>';
        $.each(clusters, function(key,value){
          container += '<tr class="subtitle is-5"><th id="pola_'+key+'"><a class="subtitle is-5" onclick="show_batik_cluster(\''+key+'\')" href="#pola='+key+'">'+key+'</a></th></tr>';
        });
          container += '</tbody></table></div></div>';
        filter = 'pola';
        kategori = '';
        $('.part2').html(container);
        $('.part2').focus();
        $('#asal').html('<a onclick="show_daerah()" href="#asal">Asal daerah </a>');
        $('#pola').html('Cluster/Pola');
        $('.part3').html('');
      }

      function show_batik_daerah(asal_daerah){
        var container = '<h4 class="title is-4">Batik yang berasal dari '+asal_daerah+': </h4><br/><div class="list-content has-text-centered">';

        if(kategori !== ''){
          $('#asal_'+kategori+'').html('<a onclick="show_batik_daerah(\''+kategori+'\')" href="#asal='+kategori+'">'+kategori+'</a>');
        }
        kategori = asal_daerah;

        $('#asal_'+kategori+'').html(kategori);

        $.each(asal_daerahs[asal_daerah], function(key,value){

          container += display_batik(value);
        });
          var url = "{{action('PageController@daftar_batik_daerah', ':daerah' )}}"
          container += '<a href="'+url.replace(':daerah', asal_daerah)+'"><h5 class="title is-5">Show all Batik</h5></a></div>';
        $('.part3').html(container);
        $('.part3').focus();
      }

      function display_batik(value){
        var container ='';
        var url = '{{ action('PageController@rincian_informasi',':id')}}';

        //container += '<p>'+value['nama_batik']+' .' + '</p>';
        container += '<div class="columns has-text-left">';
        container +=  '<div class="column is-4">';
        container +=    '<img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/'+value['gambar_pola_batik']+'" alt="">';
        container +=  '</div>';
        container +=  '<div class="column is-8">';
        container +=    '<p class="title is-4"><a href="'+url.replace(':id', value['id'])+'">'+value['nama_batik']+'</a></p>';
        container +=    '<p class="subtitle is-6">Asal Batik: '+value['asal_daerah']+'</p>';
        container +=    '<p class="subtitle is-6">Jenis Pola: ';

        if(!value['cluster_batik'] || value['cluster_batik'] === '')
          container +=    '<i>pola belum dikenal</i>';
        else
          container +=    value['cluster_batik'] + '</p>';

        container +=  '</div>';
        container += '</div>';

        return container;
      }

      function show_batik_cluster(cluster){
        var container = '<h4 class="title is-4">Batik dengan pola '+cluster+': </h4><br/><div class="list-content has-text-centered">';
        if(cluster === 'uncategorized'){
          var container = '<h4 class="title is-4">Batik dengan pola belum dikenal: </h4><br/><div class="list-content has-text-centered">';
        }

        if(kategori !== ''){
          $('#pola_'+kategori+'').html('<a onclick="show_batik_cluster(\''+kategori+'\')" href="#pola='+kategori+'">'+kategori+'</a>');
        }
        kategori = cluster;

        $('#pola_'+kategori+'').html(kategori);

        $.each(clusters[cluster], function(key,value){
          container += display_batik(value);

        });
        var url = "{{action('PageController@daftar_batik_cluster', ':cluster' )}}"
        container += '<a href="'+url.replace(':cluster', cluster)+'"><h5 class="title is-5">Show all Batik</h5></a></div>';
        $('.part3').html(container);
        $('.part3').focus();
      }
    </script>
@endsection
