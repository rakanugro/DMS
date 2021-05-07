@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
</head>



@section('content')
 					<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-file icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Form File User
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                   <!--  <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
                                    <div class="d-inline-block dropdown">
                                        <!-- <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button> -->
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>            
                     <div class="row">

                            
                            
                       </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                             <div class="main-card mb-3 card">
                                                 <!-- <div class="mt-1 btn btn-primary"><label for="exampleSelect" class="">Nama Produsen</label><select name="nama_produsen" id="nama_produsen" class="form-control" required="">
                                                        <option></option>
                                                        @foreach($produsen as $item)
                                                        <option value="{{ $item->nama_produsen }}">{{ $item->nama_produsen }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> -->
                                                    <h5 class="mt-4 mb-4"> Data file User</h2>
                                                            <table id="data_file" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama Produsen</th>
                                                                        <th>Nama Produk</th>
                                                                        <th>Jenis Dokumen</th>
                                                                        <th>Tgl Upload</th>
                                                                        <th>Tgl Kadaluarsa </th>
                                                                        <th>Nama File</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no = 0;?>
                                                                    @foreach ($file as $item)
                                                                    <?php $no++ ;?>
                                                                    <tr>
                                                                            <td>{{ $no }}</td>
                                                                            <td>{{ $item->nama_produsen }}</td>
                                                                            <td>{{ $item->nama_produk }}</td>
                                                                            <td>{{ $item->jenis_dokumen}}</td>
                                                                            <td>{{ date('d-m-Y',strtotime( $item->tgl_upload )) }}</td>
                                                                            <td>{{ date('d-m-Y',strtotime( $item->tgl_kadaluarsa )) }}</td>
                                                                            <td>{{ $item->file}}</td>
                                                                            <td>
                                                                                <a href="/file/download/{{ $item->no_id }}" class="btn btn-success" ><i class="fa fa-download" ></i> Download </a>
                                                                                
                                                                                <!-- <a href="/file/edit/{{ $item->no_id }}" class="btn btn-primary" ><i class="fa fa-edit"></i> EDIT </a>
                                                                                <a href="/file/delete/{{ $item->no_id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-trash"></i> DEL </a> -->
                                                                            </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <th>Nama Produsen</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Jenis Dokumen</th>
                                                                    <th>Tgl Upload</th>
                                                                    <th>Tgl Kadaluarsa</th>
                                                                    <th>Nama File</th>
                                                                </tr>
                                                            </tfoot>
                                                            </table>
                                                        <!-- <script>
                                                            $(document).ready(function() {

                                                            $('#data_file').DataTable();

                                                             } );
                                                        </script> -->
<script type="text/javascript">
        $(document).ready(function() {
            $('#data_file').DataTable( {
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
         
                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );
         
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            } );
        } );

</script>
                                                </div>
                                            </div>
                                           
                                        
                                          

                        </div>
                    </div>
                 </div>
              </div>   
 @endsection
 </html>