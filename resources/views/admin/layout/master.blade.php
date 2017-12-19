<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.layout.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
	@include('admin.layout.sidenavbar')

  <div class="content-wrapper">
    <div class="container-fluid">
 		
 		@yield("MainContent")
      
    </div> <!-- /.container-fluid-->
  </div> <!-- /.content-wrapper-->


   @include('admin.layout.footer')