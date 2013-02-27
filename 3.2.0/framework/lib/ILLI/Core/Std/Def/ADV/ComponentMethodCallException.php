<?PHP
	NAMESPACE ILLI\Core\Std\Def\ADV;
	
	CLASS ComponentMethodCallException EXTENDS \ILLI\Core\Std\Exception\ComponentMethodCallException
	{
		CONST ERROR_M_SET			= 0x0101000;
		CONST ERROR_M_SET_E_TYPE_EXPECTED	= 0x0101010;
		CONST ERROR_M_VALIDATE			= 0x0102000;
		CONST ERROR_M_GET			= 0x0103000;
		CONST ERROR_M_GET_GC			= 0x0104000;
		CONST ERROR_M_CREATE_HASH_ADDR		= 0x0105000;
		CONST ERROR_M_GET_NAME			= 0x0106000;
	}