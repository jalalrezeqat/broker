
@php
dd("asss");
  $actual_path = str_replace('project','',base_path());
 if (is_dir($actual_path . '/')) {
     echo '<meta http-equiv="refresh" content="0; url='.url('/').'" />';

 }else{
     echo '<h2>500 Internal server error!</h2>';
 }
@endphp

