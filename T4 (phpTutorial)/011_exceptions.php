<?php
# This function will throw an exception!
function throw_exception() {
  throw new Exception("Exception!");
}
try{
    throw_exception();
}catch(Exception $e){
	echo "Exception caught!\n";
}finally{
	echo "Done!";
}

?>