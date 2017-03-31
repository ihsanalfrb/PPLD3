@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Categories</h1>
      <hr>
      <div class="columns">
        <div class="column is-3 part1">

        </div>
        <div class="column is-3 part2">

        </div>
        <div class="column is-6 part3">

        </div>

      </div>
    </div>

    <script>
      var asal_daerahs = '{{json_encode($asal_daerahs)}}';
      asal_daerahs = JSON.parse(asal_daerahs.replace(/&quot;/g,'"'));

      var clusters = '{{json_encode($clusters)}}';
      clusters = JSON.parse(clusters.replace(/&quot;/g,'"'));

      $(document).ready(function() {
        $('.part1').html(''+
          '<p onclick="show_daerah()"> asal daerah </p>'+
        '<p onclick="show_clusters()"> pola </p>');
      });

      function show_daerah(){
        var container = '';
        $.each(asal_daerahs, function(key,value){
          container += '<p onclick="show_batik_daerah(\''+key+'\')">'+key+'</p>';
        });
        $('.part2').html(container);
        $('.part3').html('');
      }

      function show_clusters(){
        var container = '';
        $.each(clusters, function(key,value){
          container += '<p onclick="show_batik_cluster(\''+key+'\')">'+key+'</p>';
        });
        $('.part2').html(container);
        $('.part3').html('');
      }

      function show_batik_daerah(asal_daerah){
        var container = '';
        $.each(asal_daerahs[asal_daerah], function(key,value){

          container += '<p>'+value['nama_batik']+'</p>';
        });
        $('.part3').html(container);
      }

      function show_batik_cluster(cluster){
        var container = '';
        $.each(clusters[cluster], function(key,value){

          container += '<p>'+value['nama_batik']+'</p>';
        });
        $('.part3').html(container);
      }
    </script>
@endsection
