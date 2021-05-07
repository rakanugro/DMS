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
                                        <i class="pe-7s-lintern icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>User
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
                        </div>
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Form User</h5>
                                                <form action ="/user/store" method="post" class="">
                                                    {{ csrf_field() }}
                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">username</label><input name="username" id="username" placeholder="username" type="email" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">password</label><input name="password" id="password" placeholder="password" type="text"
                                                    class="form-control" required=""></div>
                                                     <div class="position-relative form-group"><label for="exampleSelect" class="">Level User</label><select name="level_user" id="level_user" class="form-control" required="">
                                                        
                                                        <option>admin</option>
                                                        <option>superadmin</option>
                                                        
                                                    </select></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">Ket</label><input name="ket" id="ket" placeholder="keterangan" type="text"
                                                    class="form-control"></div>
                                                    <!-- <div class="position-relative form-group"><label for="exampleSelectMulti" class="">Select Multiple</label><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div> -->
                                                    <!-- <div class="position-relative form-group"><label for="examplePassword" class="">telepon</label><input name="telepon" id="telepon" placeholder="telepon" type="text"
                                                    class="form-control"></div> -->
                                                    <!-- <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                    </div> -->
                                                    <button class="mt-1 btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                    <h5 class="mt-4 mb-4"> Data User</h5>
                                                            <table id="data_user" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>    
                                                                        <th>No</th>
                                                                        <th>username</th>
                                                                        <th>password</th>
                                                                        <th>level_user</th>
                                                                        <th>Ket</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no = 0;?>
                                                                    @foreach ($user as $item)
                                                                    <?php $no++ ;?>
                                                                    <tr>
                                                                            <td>{{ $no }}</td>
                                                                            <td>{{ $item->username }}</td>
                                                                            <td>{{ $item->password }}</td>
                                                                            <td>{{ $item->level_user }}</td>
                                                                            <td>{{ $item->ket }}</td>
                                                                            <td>
                                                                                <a href="/user/edit/{{ $item->no_id }}" class="btn btn-primary" ><i class="fa fa-edit"></i> EDIT </a>
                                                                                <a href="/user/delete/{{ $item->no_id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> DEL </a>
                                                                            </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        <script>
                                                            $(document).ready(function() {

                                                            $('#data_user').DataTable();

                                                             } );
                                                        </script>


                                                </div>
                                            </div>


                                    </div>
                                    
                                </div>
                    </div>
 @endsection
 </html>