<?php
  $ q u e s t i o n   =   u r l d e c o d e ( $ _ G E T [ " q u e s t i o n " ] ) ; 
 $ a d m i n   =   u r l d e c o d e ( $ _ G E T [ " a d m i n " ] ) ; 
 $ a n s w e r   =   u r l d e c o d e ( $ _ G E T [ " a n s w e r " ] ) ; 
 $ d o n e x t =   u r l d e c o d e ( $ _ G E T [ " d o n e x t " ] ) ;  //action / 2nd parameter for reply
 i f   ( $ a d m i n   = =   " p a s s w o r d 1 2 3 " )   { 
 $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
 $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
 $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;  
$newqa=array($question -> $answer."+";
 $ n e w j s o n   =   j s o n _ e n c o d e ( $ newqa) ;   
 f i l e _ p u t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ,   $ n e w j s o n ) ;   
 f c l o s e ( $ f i l e ) ; 
 } 
 e l s e   { 
 $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
 $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
 $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;   
 $ a n s w e r =   $ d a t a - > $ q u e s t i o n ; 
 $ p i e c e   =   e x p l o d e ( ' + ' , $ a n s w e r ) ; 
 $ r e p l y = $ p i e c e [ 0 ] ; 
 $ n e x t c o n t e x t = $ p i e c e [ 1 ] ; 
 f c l o s e ( $ f i l e ) ; 
echo $answer; // if device can parse to extract text answer and action
 } 
?>
 
 
