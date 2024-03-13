<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driver</title>
    <link rel="icon" type="image/jpeg" sizes="1000x730" href="{{asset('assets/img/1000_F_46794667_UKPE3SXOP3Q7kBKmS4FRBZ63VNx56iER.jpg?h=3d9738bd35754f0b05b2bc5525500a89')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css?h=3694ad95c291cc6a4e519b80b1762aab')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Source%20Sans%20Pro.css?h=c37ba52c18853fa3592add08e81f05d7')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Application-Form.css?h=67e69944f8e90dfac42c7dfb24e0628e')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Basic-icons.css?h=3f8fe3ed61628eb4bda76aca0b3052d3')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navbar-Centered-Links-icons.css?h=befd8a398792e305b7ffd4a176b5b585')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Tamplate-SB-Admin-on-BSS.css?h=2425d7d0d7d129ddc54a4a00aafc1930')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">






</head>


<style>
body {
color: #566787;
    background: #f7f5f2;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
  	min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    color: #0f0f0f;
    background: #ffffff;		
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}	
.search-box input {
    height: 34px;
    padding-right: 35px;
    background: #f4fcfd;
    border: none;
    border-radius: 2px !important;
}
.search-box input:focus {
    background: #fff;
}
.search-box input::placeholder {
    font-style: italic;
}
.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 6px 0;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
}
table.table {
    table-layout: fixed;
    margin-top: 15px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th{
    width: 125px;
}
/* table.table th:last-child {
    width: 120px;
} */
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #f4b403;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
</style>


<body>
    <div>
        <nav class="navbar navbar-expand bg-dark sb-topnav navbar-dark">
            <div class="container-fluid"><button class="btn btn-link btn-sm link-light order-md-1" id="sidebarToggle" type="button"></button><a class="navbar-brand" href="#"><img src="/assets/img/desk.jpg?h=53c7137c123a8fb1f0c16dad9657a1b9" style="width: 28px;margin-right: 10px;border-width: 3px;border-style: solid;border-radius: 10px;">&nbsp;DriverHire</a>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group"></div>
                </div>
                <form class="d-none d-md-inline-block order-2 ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <div class="input-group-append"></div>
                    </div>
                </form><a class="btn btn-primary btn-lg me-2" role="button" style="margin-left: 1070px" href="{{url('logout')}}">Logout&nbsp;</a>
                <ul class="navbar-nav d-flex order-3 ms-auto ms-md-0">
                    <li class="nav-item d-flex d-sm-flex d-md-none justify-content-center align-items-center justify-content-sm-center" style="margin-right: 7px;">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-search" style="font-size: 25px;margin-right: 0px;"></i> </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <div id="sidenavAccordion" class="sb-sidenav accordion sb-sidenav-dark">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div>
                                <div class="sb-sidenav-menu-heading"><span>Main</span></div><a class="nav-link active" href="{{url('dashboard')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Return to Main Page</span>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>User Section</span></div><a class="nav-link active" href="{{ url('user/{status}')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>List of user</span>
                                </a>
                            </div>
                            <div>

                                 {{-- <div class="sb-sidenav-menu-heading"><span>edit &amp; check</span></div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts" data-bs-toggle="collapse" data-bs-target="#collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Customer</span>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                </a>
                                <div id="collapseLayouts" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Accordion</a><a class="nav-link" href="#">Menu Accordion</a></div>
                                </div>
                            </div>
                            <div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapse2" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Driver</span>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                </a><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapse2" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Order</span>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                </a>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#sidenavAccordion">
                                    <div id="sidenavAccordionPages" class="sb-sidenav-menu-nested nav accordion"><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="pagesCollapseAuth" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"><span>Menu Item</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="pagesCollapseAuth" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small"><span>Logged In As {{ Session::get('username') }}</span></div>
                    </div>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
            <div class="col-md-10" style="max-width: 100%">
                <div class="card">
                    <div class="card-body" style="padding-left: 25px;padding-top: 0px;margin-left: 0px">
    {{-- <h2></h2><span> @foreach($user as $u) @endforeach </span> --}}
    
   
    <div class="table-responsive">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Booking Details</h1>
                    </div>
                    <div class="col-sm-6">
                        {{-- <div class="search-box">
                            <div class="input-group">								
                                <input type="text" id="search" class="form-control" placeholder="Search by Name">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            @if (session('success'))
            <script>
                Toastr.success("{{ session('success') }}");
            </script>
        @endif
        
        @if (session('err'))
        <script>
            Toastr.danger("{{ session('err') }}");
        </script>
    @endif
            
            <table class="table table-striped">
              <thead>
                <th>Customer Name</th>
                <th>Driver</th>
                <th>Contact</th>
                <th>Booking Date</th>
                <th>Booking End</th>
                <th>Total Charge</th>
                <th>Approval Status</th>
                <th>Accept or deny</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($book as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->driver }}</td>
                        <td>{{ $data->contact }}</td>
                        <td>{{ $data->bookingdate }}</td>
                        <td>{{ $data->bookingend }}</td>
                        <td>{{ $data->cost}} BDT</td>
                        <td>
                            @if($data->is_approved == 1)
                                <span class="text-success">Accepted</span>
                            @elseif ($data->is_approved == 2)
                                <span class="text-warning">Pending</span>
                                @else
                                <span class="text-danger">Rejected</span>

                            @endif
                        </td>
                        <td>
                          @if($data->is_approved == 0 || $data->is_approved == 2)
                              <a href="{{ url('approveuser/'.$data->id) }}" title="Approve">
                                  <i class="fas fa-times text-danger">Pending, Click to Accept</i>
                              </a>
                          @endif
                          @if($data->is_approved== 1)
                              <a href="{{ url('denyuser/'.$data->id) }}" title="Deny">
                                  <i class="fas fa-check text-success">Approved, Click to Reject Booking</i>
                              </a>
                          @endif
                      </td>
                      <td><a href="{{ url('deletebooking/'.$data->id)}}" title="Delete">
                        <i class="fas fa-times text-danger">Delete</i>
                    </a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>   
   
    {{-- <div class="table-responsive">
        <table class="table table-bordered table-striped" id="crud-table">      
            <thead>
                <th>Name</th>
                <th>NID</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DriverType</th>
                <th>License</th>
                <th>Address</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>UserType</th>
                <th>Profile Picture</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Sign in Approval Status</th>
            </thead>
            <tbody>
                @foreach($user as $u)
                    
                        <td>{{ $u->name}}</td>
                        <td>{{ $u->nid}}</td>
                        <td>{{ $u->dob}}</td>
                        <td>{{ $u->email}}</td>
                        <td>{{$u->phone}}</td>
                        <td>{{ $u->drivertype}}</td>
                        <td>{{ $u->license}}</td>
                        <td>{{ $u->address}}</td>
                        <td>{{ $u->qualification}}</td>
                        <td>{{ $u->experience}}</td>
                        <td>{{ $u->usertype}}</td>
                        <td>
                            @if ($u->imagename)
                            <img src="{{ asset('images/' . $u->imagename) }}" alt="{{ $u->name }}" width="100">
                            @else
                                No picture
                            @endif
                        </td>
                        <td>{{ $u->is_verified == 1 ? 'Verified' : 'Pending'}}</td>
                        <td> <a href="{{ url('edit_user/'.$u->id) }}">Edit</a>
                        </td>
                        <td>
                            @if($u->is_verified == 0)
                                <a href="{{ url('approve-user/'.$u->id) }}" title="Approve">
                                    <i class="fas fa-times text-danger">Denied, Click to Approve</i>
                                </a>
                            @endif
                            @if($u->is_verified == 1)
                                <a href="{{ url('deny-user/'.$u->id) }}" title="Deny">
                                    <i class="fas fa-check text-success">Approved, Click to Deny</i>
                                </a>
                            @endif
                        </td>                        
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div> 
    </div>
</div></div>

            </div>
        </div>
    </div>
<script>
  $(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
</body>

</html>
