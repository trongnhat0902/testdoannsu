@extends('main')

@section('content')
<div class="row px-3 pt-3">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="text-center small-box bg-info">
        <div class="inner">
          <h3>{{$tong_so_nhan_vien}}</h3>

          <p>Nhân viên</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/admin/employ/List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="text-center small-box bg-warning">
        <div class="inner">
          <h3>{{$tong_so_phong_ban}}</h3>

          <p>Phòng ban</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/admin/department/List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="text-center small-box bg-danger">
        <div class="inner">
          <h3>{{$tong_so_hop_dong}}</h3>

          <p>Hợp đồng</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/contract" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    {{-- lịch --}}
    <div class="col-12 card bg-gradient-success">
      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
  
        <h3 class="card-title">
          <i class="far fa-calendar-alt"></i>
          Calendar
        </h3>
        <!-- tools card -->
        <div class="card-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
              <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a href="#" class="dropdown-item">Add new event</a>
              <a href="#" class="dropdown-item">Clear events</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">View calendar</a>
            </div>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          {{-- <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button> --}}
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body pt-0">
        <!--The calendar -->
        <div id="calendar" style="width: 100%; text-align: center"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">June 2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="05/26/2024" class="day old weekend">26</td><td data-action="selectDay" data-day="05/27/2024" class="day old">27</td><td data-action="selectDay" data-day="05/28/2024" class="day old">28</td><td data-action="selectDay" data-day="05/29/2024" class="day old">29</td><td data-action="selectDay" data-day="05/30/2024" class="day old">30</td><td data-action="selectDay" data-day="05/31/2024" class="day old">31</td><td data-action="selectDay" data-day="06/01/2024" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="06/02/2024" class="day weekend">2</td><td data-action="selectDay" data-day="06/03/2024" class="day">3</td><td data-action="selectDay" data-day="06/04/2024" class="day">4</td><td data-action="selectDay" data-day="06/05/2024" class="day">5</td><td data-action="selectDay" data-day="06/06/2024" class="day active today">6</td><td data-action="selectDay" data-day="06/07/2024" class="day">7</td><td data-action="selectDay" data-day="06/08/2024" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="06/09/2024" class="day weekend">9</td><td data-action="selectDay" data-day="06/10/2024" class="day">10</td><td data-action="selectDay" data-day="06/11/2024" class="day">11</td><td data-action="selectDay" data-day="06/12/2024" class="day">12</td><td data-action="selectDay" data-day="06/13/2024" class="day">13</td><td data-action="selectDay" data-day="06/14/2024" class="day">14</td><td data-action="selectDay" data-day="06/15/2024" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="06/16/2024" class="day weekend">16</td><td data-action="selectDay" data-day="06/17/2024" class="day">17</td><td data-action="selectDay" data-day="06/18/2024" class="day">18</td><td data-action="selectDay" data-day="06/19/2024" class="day">19</td><td data-action="selectDay" data-day="06/20/2024" class="day">20</td><td data-action="selectDay" data-day="06/21/2024" class="day">21</td><td data-action="selectDay" data-day="06/22/2024" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="06/23/2024" class="day weekend">23</td><td data-action="selectDay" data-day="06/24/2024" class="day">24</td><td data-action="selectDay" data-day="06/25/2024" class="day">25</td><td data-action="selectDay" data-day="06/26/2024" class="day">26</td><td data-action="selectDay" data-day="06/27/2024" class="day">27</td><td data-action="selectDay" data-day="06/28/2024" class="day">28</td><td data-action="selectDay" data-day="06/29/2024" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="06/30/2024" class="day weekend">30</td><td data-action="selectDay" data-day="07/01/2024" class="day new">1</td><td data-action="selectDay" data-day="07/02/2024" class="day new">2</td><td data-action="selectDay" data-day="07/03/2024" class="day new">3</td><td data-action="selectDay" data-day="07/04/2024" class="day new">4</td><td data-action="selectDay" data-day="07/05/2024" class="day new">5</td><td data-action="selectDay" data-day="07/06/2024" class="day new weekend">6</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month active">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

<!-- JavaScript to set the correct current date and display -->
{{-- <script>
    // Function to generate the calendar for the current month and highlight today
    function generateCalendar() {
        const calendarBody = document.getElementById('calendar-body');
        const monthYearDisplay = document.getElementById('month-year');
        const today = new Date();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        const currentMonth = today.getMonth();
        const currentYear = today.getFullYear();
        const currentDate = today.getDate();

        monthYearDisplay.textContent = `${monthNames[currentMonth]} ${currentYear}`;

        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        calendarBody.innerHTML = '';

        let date = 1;
        for (let i = 0; i < 6; i++) {
            const row = document.createElement('tr');

            for (let j = 0; j < 7; j++) {
                const cell = document.createElement('td');
                cell.classList.add('day');
                if (i === 0 && j < firstDay) {
                    cell.classList.add('old');
                    cell.textContent = '';
                } else if (date > daysInMonth) {
                    break;
                } else {
                    cell.textContent = date;
                    cell.dataset.day = `${monthNames[currentMonth].substring(0, 3)} ${date}, ${currentYear}`;
                    if (date === currentDate) {
                        cell.classList.add('today');
                    }
                    date++;
                }
                row.appendChild(cell);
            }

            calendarBody.appendChild(row);
        }
    }

    // Call the function to generate the calendar on page load
    document.addEventListener('DOMContentLoaded', generateCalendar);
</script> --}}
@endsection