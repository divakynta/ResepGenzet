<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

    @section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">@yield('title')</h3> --}}
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        
        <div class="card-body">
            {{-- https://www.highcharts.com/ --}}
            {{-- html --}}
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

           
            {{-- css --}}
            <style>
                #container {
                    height: 500px;
                }

                .highcharts-figure,
                .highcharts-data-table table {
                    min-width: 320px;
                    max-width: 700px;
                    margin: 1em auto;
                }

                .highcharts-data-table table {
                    font-family: Verdana, sans-serif;
                    border-collapse: collapse;
                    border: 1px solid #ebebeb;
                    margin: 10px auto;
                    text-align: center;
                    width: 100%;
                    max-width: 500px;
                }

                .highcharts-data-table caption {
                    padding: 1em 0;
                    font-size: 1.2em;
                    color: #555;
                }

                .highcharts-data-table th {
                    font-weight: 600;
                    padding: 0.5em;
                }

                .highcharts-data-table td,
                .highcharts-data-table th,
                .highcharts-data-table caption {
                    padding: 0.5em;
                }

                .highcharts-data-table thead tr,
                .highcharts-data-table tr:nth-child(even) {
                    background: #f8f8f8;
                }

                .highcharts-data-table tr:hover {
                    background: #f1f7ff;
                }
            </style>

            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">

                </p>
            </figure>

            {{-- js --}}
            <script>
                Highcharts.chart('container', {
                    chart: {
                        type: 'variablepie'
                    },
                    title: {
                        text: 'Grafik Jumlah Resep Setiap Category'
                    },
                    tooltip: {
                        headerFormat: '',
                        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                            'Jumlah Resep Genzet : <b>{point.y}</b><br/>' +
                            'Persentase : <b>{point.z}%</b><br/>'
                    },
                    series: [{
                        minPointSize: 100,
                        innerSize: '20%',
                        zMin: 0,
                        name: 'categories',
                        data: [
                            @foreach ($grafik1 as $data)
                                {
                                    name: '{{ $data->nama_kategori }}',
                                    y: {{ $data->jumlah_recipe }},
                                    z: 265
                                },
                            @endforeach
                        ]
                    }]
                });
            </script>

        </div>

        <div class="card-footer">

        </div>

    </div>
  @endsection

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>