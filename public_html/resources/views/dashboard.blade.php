@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    {{-- <script type="text/javascript">
        var ctx2 = document.getElementById("chart-line").getContext("2d");
        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Sale",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: {{ json_encode($sale) }},
                        maxBarThickness: 6

                    },
                    {
                        label: "Rent",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: {{ json_encode($rent) }},
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                            },
                            ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script> --}}

    <script type="text/javascript">

        var ctx11 = document.getElementById("chart-sale").getContext("2d");
        var gradientStroke1 = ctx11.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx11.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        var myChart = new Chart(ctx11, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Visitors",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: {{ json_encode($sale) }},
                        maxBarThickness: 6

                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                            },
                            ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
        var saleData = @json($sale);
        console.log(saleData);
        
        var originalLabels = myChart.data.labels;
        var originalData = myChart.data.datasets[0].data;
        
        document.getElementById('dateFilter').addEventListener('change', function() {
            if (this.value) {
                var selectedDate = new Date(this.value);
                var daysInMonth = new Date(selectedDate.getFullYear(), selectedDate.getMonth()+1, 0).getDate();
                var labels = Array.from({length: daysInMonth}, (_, i) => i + 1);
        
                // Calculate the average sales per day
                var averageSalesPerDay = saleData[selectedDate.getMonth()] / daysInMonth;
        
                // Update the data as well as the labels
                myChart.data.labels = labels;
                myChart.data.datasets[0].data = Array(daysInMonth).fill(averageSalesPerDay);
            } else {
                // If the input is cleared, restore the original labels and data
                myChart.data.labels = originalLabels;
                myChart.data.datasets[0].data = originalData;
            }
        
            myChart.update();
        });

    </script>

    <script type="text/javascript">
        var ctx22 = document.getElementById("chart-rent").getContext("2d");
        var gradientStroke1 = ctx22.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx22.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        var mychart2 = new Chart(ctx22, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Visitors",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: {{ json_encode($rent) }},
                        maxBarThickness: 6

                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                            },
                            ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var rentData = @json($rent);
        
            var originalLabels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var originalData = rentData;
        
            document.getElementById('rentDateFilter').addEventListener('change', function() {
                if (this.value) {
                    var selectedDate = new Date(this.value);
                    var daysInMonth = new Date(selectedDate.getFullYear(), selectedDate.getMonth()+1, 0).getDate();
                    var labels = Array.from({length: daysInMonth}, (_, i) => i + 1);

                    // Calculate the average sales per day
                    var averageSalesPerDay = rentData[selectedDate.getMonth()] / daysInMonth;

                    // Update the data as well as the labels
                    mychart2.data.labels = labels;
                    mychart2.data.datasets[0].data = Array(daysInMonth).fill(averageSalesPerDay);
                } else {
                    // If the input is cleared, restore the original labels and data
                    mychart2.data.labels = originalLabels;
                    mychart2.data.datasets[0].data = originalData;
                }

                mychart2.update();
            });
        

    </script>


    <script type="text/javascript">
        var ctx33 = document.getElementById("wb").getContext("2d");
        var gradientStroke1 = ctx33.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx33.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        var myChart3 = new Chart(ctx33, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Visitors",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: {{ json_encode($website_visitors) }},
                        maxBarThickness: 6

                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                            },
                            ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var websiteVisitorsData = @json($website_visitors);
        var originalLabels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var originalData = websiteVisitorsData;

        document.getElementById('websiteDateFilter').addEventListener('change', function() {
        if (this.value) {
            var selectedDate = new Date(this.value);
            console.log(selectedDate);
            var daysInMonth = new Date(selectedDate.getFullYear(), selectedDate.getMonth()+1, 0).getDate();
            var labels = Array.from({length: daysInMonth}, (_, i) => i + 1);

            // Calculate the average visitors per day
            var averageVisitorsPerDay = Math.round(websiteVisitorsData[selectedDate.getMonth()] / daysInMonth);

            // Update the data as well as the labels
            myChart3.data.labels = labels;
            myChart3.data.datasets[0].data = Array(daysInMonth).fill(averageVisitorsPerDay);
        } else {
            // If the input is cleared, restore the original labels and data
            myChart3.data.labels = originalLabels;
            myChart3.data.datasets[0].data = originalData;
        }

        myChart3.update();
    });

    </script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    ₱ {{ number_format($todays_sales, 2) }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#" data-toggle="modal" data-target="#dateModalSales">
                                <div class="icon icon-shape bg-pink shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dateModalSales" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dateModalLabel">Filter Sales</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="dateForm" method="GET" action="/dashboard">
                            <div class="form-group">
                                <label for="selected_date_sales">Select Date</label>
                                <input type="date" id="selected_date_sales" name="selected_date_sales" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Rent</p>
                                <h5 class="font-weight-bolder mb-0">
                                    ₱ {{ number_format($todays_rent, 2) }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#" data-toggle="modal" data-target="#dateModalRental">
                                <div class="icon icon-shape bg-pink shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dateModalRental" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dateModalLabel">Filter Rentals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="dateForm" method="GET" action="/dashboard">
                            <div class="form-group">
                                <label for="selected_date_rentals">Select Date</label>
                                <input type="date" id="selected_date_rentals" name="selected_date_rentals" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Customers</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $customers }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#" data-toggle="modal" data-target="#dateModalCustomers">
                                <div class="icon icon-shape bg-pink shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dateModalCustomers" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dateModalLabel">Filter Customers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="dateForm" method="GET" action="/dashboard">
                            <div class="form-group">
                                <label for="selected_date_customers">Select Date</label>
                                <input type="date" id="selected_date_customers" name="selected_date_customers" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Out For Rent</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $out_for_rent }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#" data-toggle="modal" data-target="#dateModalOutRentals">
                                <div class="icon icon-shape bg-pink shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dateModalOutRentals" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dateModalLabel">Filter Out For Rent</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="dateForm" method="GET"  action="/dashboard">
                            <div class="form-group">
                                <label for="selected_date_out_rentals">Select Date</label>
                                <input type="date" id="selected_date_out_rentals" name="selected_date_out_rentals" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-6 mb-3">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                <input type="month" id="dateFilter" name="dateFilter">
                    <h6>Annual Sales Summary ({{ date('Y') }})</h6>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-sale" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-3">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                <input type="month" id="rentDateFilter" name="dateFilter">
                    <h6>Annual Rent Summary ({{ date('Y') }})</h6>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-rent" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                <input type="month" id="websiteDateFilter" name="websiteDateFilter">
                    <h6>Website Visitors ({{ date('Y') }})</h6>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="wb" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection