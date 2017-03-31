@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Categories</h1>
      <hr>
      <div class="columns">
        <div class="column is-4">

        </div>
        <div class="column is-4 part2">

        </div>
        <div class="column is-4 part3">
        </div>

      </div>
    </div>

    <script>
      var asal_daerahs
      var asal_daerahs = '{{json_encode($asal_daerahs)}}';
      asal_daerahs = JSON.parse(asal_daerahs.replace(/&quot;/g,'"'));

      $(document).ready(function() {
        show_daerah();
      });

      function show_daerah(){
        var container = '';
        $.each(asal_daerahs, function(key,value){
          container += '<p onclick="show_batik_daerah(\''+key+'\')">'+key+'</p>';
        });
        $('.part2').html(container);
      }

      function show_batik_daerah(asal_daerah){
        var container = '';
        $.each(asal_daerahs[asal_daerah], function(key,value){
          
          container += '<p>'+value['nama_batik']+'</p>';
        });
        $('.part3').html(container);
      }
    </script>
@endsection
