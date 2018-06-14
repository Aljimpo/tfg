
var quotes=new Array()

//change the quotes if desired. Add/ delete additional quotes as desired.

quotes[0]='Rompe la costra que se forma en la tierra cuando está seca. Impide la aireación y absorción de humedad.'

quotes[1]='Las plantas de interior necesitan luz pero no muy fuerte. Oriéntalas al Este u Oeste para que reciban radiación más tenue.'

quotes[2]='El mejor momento para trasplantar plantas de interior es la primavera. Salen del letargo invernal y comienzan su actividad vegetativa.'

quotes[3]='El polvo tapona los estomas de las hojas de nuestras plantas. Como en casa no llueve necesitan que las limpies de vez en cuando.'

quotes[4]='De año en año conviene airear el sustrato apelmazado de macetas y jardineras con una horquilla de mano o un simple tenedor.'

quotes[5]='Después de una fuerte lluvia, la tierra se apelmaza y se forman costras. Lo ideal es quitarlas.'

quotes[6]='Puedes dormir con plantas sin problema. Eso de que te roban todo el oxígeno es totalmente mentira.'

quotes[7]='Controla la mezcla Carbono-nitrógeno en tu pila de compost para que salga un abono de gran calidad.'



var whichquote=Math.floor(Math.random()*(quotes.length))
document.write(quotes[whichquote])

























