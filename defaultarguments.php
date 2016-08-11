
/*<?php
/*function book($title = 'Steve Jobs', $about = 'Tech Revolution') {
      echo "This is the $title book and it's doing $about";
    }
book('Mac', 'Computers');
?>*/
function book($title = 'Steve Jobs', $about = Null) {
      if($about) {
          echo "This is the $title book and it's doing $about";
      } else {
        echo 'This a computers book';
      }
    }
book();
?>
