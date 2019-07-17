<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products Listing</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Product
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>
 
        <!-- ADD MODAL -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Code</label>
                            <div class="col-md-10">
                              <input type="text" name="code" id="code" class="form-control" placeholder="Product Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="name" id="name" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Price</label>
                            <div class="col-md-10">
                              <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END ADD MODAL -->
 
        <!-- EDIT MODAL -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Code</label>
                            <div class="col-md-10">
                              <input type="text" name="code_edit" id="code_edit" class="form-control" placeholder="Product Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="name_edit" id="name_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Price</label>
                            <div class="col-md-10">
                              <input type="text" name="price_edit" id="price_edit" class="form-control" placeholder="Price">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END EDIT MODAL -->
 
        <!-- DELETE MODAL -->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="code_delete" id="code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END DELETE MODAL -->
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
 
<script type="text/javascript">
    $(document).ready(function(){
        show_product(); 
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('product/view')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      var sr_no = i+1;
                        html += '<tr>'+
                                '<td>'+sr_no+'</td>'+
                                '<td>'+data[i].code+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].price+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-code="'+data[i].code+'" data-name="'+data[i].name+'" data-price="'+data[i].price+'"><i class="fa fa-pencil"></i></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-code="'+data[i].code+'"><i class="fa fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var code = $('#code').val();
            var name = $('#name').val();
            var price        = $('#price').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/add')?>",
                dataType : "JSON",
                data : {code:code , name:name, price:price},
                success: function(data){
                    $('[name="code"]').val("");
                    $('[name="name"]').val("");
                    $('[name="price"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var code = $(this).data('code');
            var name = $(this).data('name');
            var price        = $(this).data('price');
             
            $('#Modal_Edit').modal('show');
            $('[name="code_edit"]').val(code);
            $('[name="name_edit"]').val(name);
            $('[name="price_edit"]').val(price);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var code = $('#code_edit').val();
            var name = $('#name_edit').val();
            var price        = $('#price_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/edit')?>",
                dataType : "JSON",
                data : {code:code , name:name, price:price},
                success: function(data){
                    $('[name="code_edit"]').val("");
                    $('[name="name_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var code = $(this).data('code');
             
            $('#Modal_Delete').modal('show');
            $('[name="code_delete"]').val(code);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var code = $('#code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete')?>",
                dataType : "JSON",
                data : {code:code},
                success: function(data){
                    $('[name="code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
    });
 
</script>
</body>
</html>