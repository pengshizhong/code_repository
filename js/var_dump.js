function var_dump( objElement, intLimit, intDepth )
    {
        intDepth = intDepth?intDepth:0;
        intLimit = intLimit?intLimit:1;

        strReturn = '<ol>';

        for( property in objElement )
        {
            // Property domConfig isn't accesible
            if( property != 'domConfig' )
            {
                strReturn += '<li><strong>' + property + '</strong> <small>(' + ( typeof objElement[property] ) + ')</small>';

                if ( typeof objElement[property] == 'number' || typeof objElement[property] == 'boolean' ) {
                    strReturn += ' : <em>' + objElement[property] + '</em>';
                }

                if ( typeof objElement[property] == 'string' && objElement[property] ) {
                    strReturn += ': <div style="background:#C9C9C9; border:1px solid black; overflow:auto;"><code>' +
                            objElement[property].replace(/</g, '<').replace(/>/g, '>') + '</code></div>';
                }

                if ( typeof objElement[property] == 'object' && ( intDepth < intLimit ) ) {
                    strReturn += var_dump( objElement[property], intLimit, ( intDepth + 1 ) );
                }

                strReturn += '</li>';
            }
        }

        strReturn += '</ol>';

        if ( intDepth == 0 )
        {
            winpop = window.open( "", "", "width=800, height=600, scrollbars, resizable" );
            winpop.document.write( '<pre>' + strReturn + '</pre>' );
            winpop.document.close();
        }

        return strReturn;
    }