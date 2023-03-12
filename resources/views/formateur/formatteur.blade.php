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
    <title>Dashboard | LMS | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
    <style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }
    .me-2 {
        margin-right: .5rem!important;
    }
</style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
           @include('formateur.include.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            
        
            <section>
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                            <div class="mt-3">
                                                <h4>{{auth()->user()->name}}</h4>
                                                <a  href="/formateur/Profileformateur" class="btn btn-outline-primary">gerer profile</a>
                                               
                                               
                                                <a  href="/formateur/addskills" class="btn btn-outline-primary">Ajouter Skills</a>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                                @foreach ($formateur as $row2)
                                                @if($row2->porcentageskills<50)
                                                <p>{{$row2->nameskill}}</p>
                                                <div class="progress mb-3" style="height: 5px">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{$row2->porcentageskills}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @else
                                                <p>{{$row2->nameskill}}</p>
                                                <div class="progress mb-3" style="height: 5px">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$row2->porcentageskills}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @endif
                                                @endforeach
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section
  
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
    <script src="./assets/js/charts/chart-lms.js?ver=2.9.1"></script>
</body>

</html>