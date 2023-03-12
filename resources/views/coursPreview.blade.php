@if (substr($cours_file->file,-3)=='pdf')
    <embed src="{{asset('assets/file/'.$cours_file->file)}}" type="application/pdf" width="800px" height="2100px" />
    {{-- <iframe src="{{asset('assets/file/1647864787.pdf')}}" style="width:600px; height:500px;" frameborder="0"></iframe> --}}
    {{-- <object data='{{asset('assets/file/1647864787.pdf')}}'  --}}
        type='application/pdf' 
        width='100%' 
        height='700px'>
@else
    <video style=" 
    width: 100%;
    height: 100%;
    " controls autoplay>
        <source src="{{asset('assets/file/'.$cours_file->file)}}" type="video/mp4">
    Your browser does not support 
    </video>

@endif