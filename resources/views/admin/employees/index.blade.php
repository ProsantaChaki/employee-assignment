@extends('layouts.admin')
@section('content')
@can('user_create')
    <!--div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.employee.create") }}">
                {{-- trans('global.add') }} {{ trans('global.employee.title_singular') --}}
            </a>
        </div>
    </div-->
@endcan
<div class="card">
    <div class="x_panel" style="margin: 10px">
        <div class="x_content">
            <div class="col-sm-12 col-lg-12 row">
                <div class="dataTables_length col-sm-6 col-lg-6 ">
                    <label>Show
                        <select size="1" style="width: 66px;padding: 6px;" id="employee_limit" name="employee_limit" aria-controls="customer_Table">
                            <option value="5" selected="selected" >5</option>
                            <option value="10" >10</option>
                            <option value="50" >50</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                        </select>
                        Post
                    </label>
                </div>
                <div class="col-lg-6 right" style="text-align: right; margin-right: 0px" onclick="updateEmployeelist()">
                    <a class="btn btn-warning">
                        Update Employee List
                    </a>
                </div>

            </div>
            <div style="max-height:550px; width:100%; overflow-y:scroll">
                <table id="table_records" name="table_records" class="table table-bordered  responsive-utilities jambo_table table-striped  table-scroll ">
                    <thead>
                    <tr class="headings">
                        <th class="column-title" width="13%"> {{ trans('global.employee.fields.emoplyee_no') }}</th>
                        <th class="column-title" width="">  {{ trans('global.employee.fields.name') }}</th>
                        <th class="column-title" width="13%"> {{ trans('global.employee.fields.designation') }}</th>
                        <th class="column-title" width="10%"> {{ trans('global.employee.fields.department') }}</th>
                        <th class="column-title" width="10%"> {{ trans('global.employee.fields.company') }}</th>
                        <th class="column-title" width="8%"> {{ trans('global.employee.fields.salary') }}</th>
                        <th class="column-title" width="13%"> {{ trans('global.employee.fields.joining_date') }}</th>
                        <th class="column-title" width="15%"> {{ trans('global.employee.fields.termination_date') }}</th>
                    </tr>
                    </thead>
                    <tbody id="customer_table_body" class="scrollable">
                    <!--tr>
                        <input type="hidden" class="employee_id" value="11">
                        <td> </td>
                        <td > <p class="employee"> name </p> <input class="text_input" type="text" name="name" value="name" style="display: none"></td>
                        <td> <p class="employee"> Employee Id </p> <input class="text_input" type="text" name="employee_id" value="Employee Id" style="display: none"></td>
                        <td>
                            <p class="designation">Designation</p>
                            <input class="designation_id" type="hidden" value="2">
                            <select class="designationSelect" name="designation" style="display: none">
                            </select>
                        </td>
                        <td> <p class="employee"> Department </p> <input class="text_input" type="text" name="department" value="Department" style="display: none"></td>
                        <td> <p class="employee"> Company </p> <input class="text_input" type="text" name="company" value="Company" style="display: none"></td>
                        <td> <p class="employee"> Salary </p> <input class="text_input" type="text" name="salary" value="Salary" style="display: none"></td>
                        <td> <p class="employee"> Joining Date </p> <input class="text_input" type="date" name="joining_date" value="" style="display: none"></td>
                        <td> <p class="employee"> Termination Date </p> <input class="text_input" type="date" name="termination_date" value="" style="display: none"></td>
                        <td><span class="nobr"></span></td>
                    </tr-->
                    </tbody>
                </table>
            </div>
            <div id="customer_Table_div" style="margin-top: 15px">
                <div class="dataTables_info" id="customer_Table_info">Showing <span id="from_to_limit"></span> of  <span id="total_record"></span> entries</div>
                <div class="dataTables_paginate paging_full_numbers" id="employee_table_pagination">
                </div>
            </div>
        </div>
    </div>

</div>
@section('scripts')
@parent
<script>
    designation={}
    employeeList={}
    updateEmployee={}
    currentPage = 1
    $.ajax({
        url: "{{ url('admin/designation')}}",
        type:'get',
        async:false,
        contentType: false,
        processData: false,
        success: function(response) {
            data = JSON.parse(response)
            $.each(data, function (key, datas) {
                designation[datas.id]=datas.name
            })
            //console.log(designation)
        }
    })

    displayBlock = () =>{
        $('.employee').css('display','block')
        $('.text_input').css('display','none')
        $('.designation').css('display','block')
        $('.designationSelect').css('display','none')

    }


    paging = (total_pages, current_page_no,paging_div_id ) =>{
        //alert(1)
        if(total_pages == 1){
            var paging_html = '<a tabindex="0" class="first paginate_button paginate_button_disabled" id="'+paging_div_id+'_first">First</a>'+
                '<a tabindex="0" class="previous paginate_button paginate_button_disabled" id="'+paging_div_id+'_previous">Previous</a>'+
                '<span>';
            paging_html  += '<a tabindex="0" class="paginate_active">1</a>';
            paging_html   += '</span>'+
                '<a tabindex="0" class="next paginate_button" id="'+paging_div_id+'_next">Next</a>'+
                '<a tabindex="0" class="last paginate_button" id="'+paging_div_id+'_last">Last</a>';
        }
        else if(total_pages > 1){
            if(current_page_no == 1) prev_page_no = 0;
            else 					 prev_page_no = (parseInt(current_page_no)-1);
            var paging_html = '<a tabindex="0" class="first paginate_button paginate_button_disabled" id="'+paging_div_id+'_first" onclick="load_page(1)">First</a>'+
                '<a tabindex="0" class="previous paginate_button paginate_button_disabled" id="'+paging_div_id+'_previous" onclick="load_page('+prev_page_no+')" >Previous</a>'+
                '<span>';
            page_i=1
            while(page_i < total_pages+1){
                if(current_page_no == page_i) paging_html  += '<a tabindex="0" class="paginate_active" onclick="load_page('+page_i+')">'+page_i+'</a>';
                else 					      paging_html  += '<a tabindex="0" class="paginate_button" onclick="load_page('+page_i+')">'+page_i+'</a>';
                page_i++;
            }
            if(current_page_no == total_pages)  next_page_no = 0;
            else 					 			next_page_no = (parseInt(current_page_no)+1);
            paging_html   += '</span>'+
                '<a tabindex="0" class="next paginate_button" id="'+paging_div_id+'_next" onclick="load_page('+next_page_no+')">Next</a>'+
                '<a tabindex="0" class="last paginate_button" id="'+paging_div_id+'_last" onclick="load_page('+total_pages+')">Last</a>';
        }
        $('#'+paging_div_id).html(paging_html);
    }


    load_page = (page)=>{
        currentPage = page;
        limit = $('#employee_limit').val()

        $.ajax({
            url: "{{ url('admin/load_employee')}}/"+page+"/"+limit,
            type:'get',
            async:false,
            contentType: false,
            processData: false,
            success: function(response) {
                //alert(response)
                data = JSON.parse(response)
                html = '';
                $.each(data.employee, function (key, employee) {
                    //console.log(employee)
                    if (!(employee.id in employeeList)) {
                        employeeList[employee.id]=employee
                    }
                    termination_date = employeeList[employee.id].termination_date!=null?employeeList[employee.id].termination_date:'0000-00-00'
                    html+='<tr>\n' +
                        '      <input type="hidden" class="employee_id" value="'+employee.id+'">\n' +
                        '       <td> <p class="employee"> '+employeeList[employee.id].emoplyee_no+' </p> <input class="text_input" type="text" name="emoplyee_no" value="'+employeeList[employee.id].emoplyee_no+'" style="display: none"></td>\n' +
                        '       <td > <p class="employee"> '+employeeList[employee.id].name+' </p> <input class="text_input" type="text" name="name" value="'+employeeList[employee.id].name+'" style="display: none"></td>\n' +
                        '       <td>\n' +
                        '           <p class="designation">'+employeeList[employee.id].designation.name+'</p>\n' +
                        '           <input class="designation_id" type="hidden" value="'+employee.designation_id+'">\n' +
                        '           <select class="designationSelect" name="designation" style="display: none">\n' +
                        '           </select>\n' +
                        '       </td>\n' +
                        '       <td> <p class="employee"> '+employeeList[employee.id].department+' </p> <input class="text_input" type="text" name="department" value="'+employeeList[employee.id].department+'" style="display: none"></td>\n' +
                        '       <td> <p class="employee"> '+employeeList[employee.id].company+' </p> <input class="text_input" type="text" name="company" value="'+employeeList[employee.id].company+'" style="display: none"></td>\n' +
                        '       <td> <p class="employee"> '+employeeList[employee.id].salary+' </p> <input class="text_input" type="number" name="salary" value="'+employeeList[employee.id].salary+'" style="display: none"></td>\n' +
                        '       <td> <p class="employee"> '+employeeList[employee.id].joining_date+' </p> <input class="text_input" type="date" name="joining_date" value="'+employeeList[employee.id].joining_date+'" style="display: none"></td>\n' +
                        '       <td> <p class="employee"> '+termination_date+' </p> <input class="text_input" type="date" name="termination_date" value="'+termination_date+'" style="display: none"></td>\n' +
                        '   </tr>'

                })

                $('#table_records tbody ').html(html);
                //console.log(html)
                $('#total_record').html(data.number)
                $('#from_to_limit').html(limit)
                paging(((data.number)/limit),page,'employee_table_pagination')

               // console.log(employeeList)
            }
        })

        $('.employee').click(function () {
            displayBlock()
            //alert('ok')
            $(this).siblings('.text_input').css('display','block')
            $(this).css('display','none')
        })

        $('.text_input').on('change',function () {
            $(this).siblings('.employee').html($(this).val())
            displayBlock()
            emp_id = $(this).parent().siblings('.employee_id').val()
            field_name = $(this).attr('name')
            if (!(emp_id in updateEmployee)) {
                updateEmployee[emp_id]={}
            }

            updateEmployee[emp_id][field_name] =$(this).val();
            //alert(employeeList[emp_id][field_name]+'=='+$(this).val())

            employeeList[emp_id][field_name] = $(this).val();
            //alert(employeeList[emp_id][field_name]+'=='+$(this).val())

        })

        $('.designation').click(function () {
            displayBlock()
            //alert('ok')
            $(this).css('display','none')
            id = $(this).siblings('.designation_id').val()

            $(this).siblings('.designationSelect').css('display','block')
            html = ''
            $.each(designation, function (key, designations) {
                if(id==key){
                    html+=' <option value="'+key+'" selected>'+designations+'</option>\n'
                }else if(key !=0){
                    html+=' <option value="'+key+'">'+designations+'</option>\n'
                }
            })
            $(this).siblings('.designationSelect').html(html)
            //$(this).css('display','none')
        })

        $('.designationSelect').on('change',function () {
            $(this).siblings('.designation_id').val($(this).val())
            $(this).siblings('.designation').html(designation[$(this).val()])

            displayBlock()
            //alert(1)

            emp_id = $(this).parent().siblings('.employee_id').val()
            field_name = $(this).attr('name')
            if (!(emp_id in updateEmployee)) {
                updateEmployee[emp_id]={}
            }
            updateEmployee[emp_id]['designation_id'] =$(this).val();
            employeeList[emp_id].designation.name = designation[$(this).val()];
            employeeList[emp_id].designation.id = $(this).val();

        })

    }

    load_page(1)

    $('#employee_limit').on('change',function () {
        load_page(1)
    })

    updateEmployeelist = ()=>{
       // console.log(updateEmployee)
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url: "{{ url('admin/update_employee')}}",
            dataType: 'application/json',
            data: {data:updateEmployee},
            success:function(data){
                //alert(data);
                employeeList={}
                updateEmployee={}
                load_page(currentPage)
            }

        });


    }


    //alert(designation[1])






</script>
@endsection
@endsection
