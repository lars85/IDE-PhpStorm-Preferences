/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 * @return#if (${STATIC} == "static") void#else self#end
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
    return $this;
#end
}
