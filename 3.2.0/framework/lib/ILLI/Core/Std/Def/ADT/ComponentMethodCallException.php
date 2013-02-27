<?PHP
	NAMESPACE ILLI\Core\Std\Def\ADT;
	
	CLASS ComponentMethodCallException EXTENDS \ILLI\Core\Std\Spl\Fsb\ComponentMethodCallException
	{
		CONST ERROR_M_CTOR_E_DEFINITION_LENGTH_ZERO		= 0x0201010;
		CONST ERROR_M_VALIDATE					= 0x0202000;
		CONST ERROR_M_GET_NAME					= 0x0203000;
		CONST ERROR_M_GET_GC					= 0x0204000;
		CONST ERROR_M_TO_STRING					= 0x0205000;
		CONST ERROR_M_CREATE_HASH_ADDR				= 0x0206000;
		CONST ERROR_M_PARSE_DEF					= 0x0207000;
		CONST ERROR_M_PARSE_DEF_E_EXPECTED_STRING		= 0x0207010;
		CONST ERROR_M_PARSE_DEF_E_RESULT_LENGTH_ZERO		= 0x0207020;
		CONST ERROR_M_GET_SIZE					= 0x0208000;
		CONST ERROR_M_OFFSET_EXISTS				= 0x0209000;
		CONST ERROR_M_OFFSET_GET				= 0x020A000;
		CONST ERROR_M_COUNT					= 0x020B000;
		CONST ERROR_M_CURRENT					= 0x020C000;
		CONST ERROR_M_KEY					= 0x020D000;
		CONST ERROR_M_NEXT					= 0x020E000;
		CONST ERROR_M_REWIND					= 0x020F000;
		CONST ERROR_M_VALID					= 0x0210000;
		CONST ERROR_M_END					= 0x0211000;
		CONST ERROR_M_KEYS					= 0x0212000;
		CONST ERROR_M_PREV					= 0x0213000;
		CONST ERROR_M_VALUES					= 0x0214000;
		CONST ERROR_M_SET_SIZE					= 0x0215000;
		CONST ERROR_M_OFFSET_SET				= 0x0216000;
		CONST ERROR_M_OFFSET_UNSET				= 0x0217000;
		CONST ERROR_M_FROM_ARRAY				= 0x0218000;
		
		CONST M_CTOR_E_DEFINITION_LENGTH_ZERO			= 'Constructor-Argument is an empty array.';
		CONST M_PARSE_DEF_E_EXPECTED_STRING			= 'Error in type-definition for {:class} at offset [{:offset}].';
		CONST M_PARSE_DEF_E_RESULT_LENGTH_ZERO			= 'Parser-result is an empty array.';
	}