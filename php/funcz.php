<?php
 function display($srcf,$srcd,$pbig,$psmall,$d,$tgtUrl)
 {$ret='<a href="'.$tgtUrl;
 $ret.='?grp='.$srcd;
 $ret.='&fromurl='.$srcf;
 $ret.='&pic=img/'.$pbig;
 $ret.='&descr='.$d.'" ';
 $ret.=' title="'.$d.' - Click for full-sized Picture">';
 $ret.='<img src="img/'.$psmall.'" ';
 $ret.=' alt="'.$d.'" ';
 $ret.=' class="img-responsive img-rounded">';
 $ret.='</a>';
 return $ret;
 }
 ?>