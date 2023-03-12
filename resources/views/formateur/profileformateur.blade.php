<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Courses</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('formateur.include.sidebar')

            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <!-- main header @e -->
                <!-- content @s -->
                <section>
                    <div class="col-lg-12">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{session()->get('message')}}
                
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                        {{session()->get('error')}}
                
                        </div>
                        @endif
                </section>
                <!-- End Course Details -->
                
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-3 border-right">
                            @foreach ($user as $row )
                 
               
                                                               
                                                               
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="assets/uploads/{{$row->image}}" class="rounded-circle mt-5" width="150px" src=""><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span><br> 
                                @endforeach
                               
                                <form method="post" action="/uploadImage" enctype="multipart/form-data">
                                    @csrf
                             
                                <input type="file" class="form-controller" name="photo">
                             <button type="submit">changer votre photo de profile</button>
             
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <form method="post" action="/changePassowrd">
                                    @csrf
                               
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"  name="name" placeholder="first name" value="{{$row->name}}"></div>
                                    
                                </div>
                                <div class="row mt-3">
                                   
                                    
                                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{$row->email}}"></div>
                              
                                    <div class="col-md-12"><label class="labels">modepasse </label><input type="password" name="pwd1"class="form-control" placeholder="modepasse" value=""></div>
                                    <div class="col-md-12"><label class="labels">verfier votre modepasse:</label><input type="password"  name="pwd2" class="form-control" placeholder="modepasse" value=""></div>
                                </div>
                                <div class="row mt-3">
                                   
                                </div>
                                <div class="mt-5 text-center"><button type="submit" class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                            </form>
                            </div>
                        </div>
                      
                    </div>
                </div>
                </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
              
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
   

    <!-- .Edit Modal-Content -->

    <!-- .Delete Modal-content -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=2.9.1">
    <script src="./assets/js/libs/editors/quill.js?ver=2.9.1"></script>
    <script src="./assets/js/editors.js?ver=2.9.1"></script>
</body>

</html>