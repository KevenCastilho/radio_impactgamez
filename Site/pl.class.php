<?php
class pag
{
	function pag()
	{
		if ( isset ( $_GET['sexy'] )  )
		{
			if ( file_exists ( 'Paginas/'.$_GET['sexy'].'.php' ) )
			{
				require ( 'Paginas/'.$_GET['sexy'].'.php' );
				exit ();
			}
			else
			{
				print ( '<p class="warning">A P&aacute;gina n&atilde;o foi encontrada ! </p>' );
				exit ();
			}
		}
	}
}
?>