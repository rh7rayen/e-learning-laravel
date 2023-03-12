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
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Courses</h3>
                                            <div class="nk-block-des text-soft">
                                             
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                           <!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <table class="nk-tb-list nk-tb-ulist">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">image</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">Email</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">nombre de message</span></th>
                                                           
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($user as $row)
                                                        @php
                                                            
                                                            $messagecount=DB::table('messangers')->where('status',"true")->where('user_id',$row->id)->count();
                                                        @endphp
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <img src="assets/uploads/{{$row->image}}" class="rounded-circle mt-5" width="100px" src="">
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span >{{$row->name}} </span>
                                                                </td>
                                                                
                                                               
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>{{$row->email}} </span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>{{ $messagecount}} </span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span><a href="/messanger/{{$row->id}}" class="btn btn-primary">message</a></span>
                                                                </td>
                                    
                                                             
                                                                
                                                            </tr><!-- .nk-tb-item -->
                                                        @endforeach
                                                    </tbody>
                                                </table><!-- .nk-tb-list -->
                                            </div>
                                       
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
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