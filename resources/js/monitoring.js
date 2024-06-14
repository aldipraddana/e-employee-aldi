$(function() {
        let employeeTable = $('.employee-table--datatable').DataTable({
            lengthChange: false,
            searching: true 
        });
        
        //hide current datatable
        $('.dt-search').closest('.dt-layout-cell').css('display', 'none')
        
        $('.search-employee-table--datatable').on('input', function () {
            let val = $(this).val();
            console.log(val);
            employeeTable.search(val).draw();  
        })
})