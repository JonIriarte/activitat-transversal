/*Tengo que conterolar la categoría y si está acabada la carrera desde fuera. ¿Se podría hacer inscripción para más de dos carreras a la vez?

Por otro lado tengo que controlar los dorsales para cada carrera desde fuera y no tegno nada hecho. 

No tengo hecho lo de pagado o no. En principio uno se inscribe y paga a la vez y no se reservan plazas. 
*/ 

INSERT INTO `inscripcion`(`pago_insc`, `dorsal_insc`, `id_edic`, `id_part`, `id_cat`) VALUES (1,1,
(SELECT id_edic FROM edicion WHERE finalizada_edic = 0),
(SELECT id_part FROM participante WHERE dni_part = "12345678A"),
(SELECT id_cat from categoria WHERE id_cat=5));  