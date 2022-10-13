def cantidad_minima(monto):
  denominaciones = [500,200,100,50,20,10]
  monedas = 0

  for i in range(len(denominaciones)):
    denominacion = denominaciones[i]

    monedas += int(monto/denominacion)
    monto = int(monto % denominacion)

  return monedas

print (cantidad_minima(1000))