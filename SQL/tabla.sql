CREATE TABLE visita (
    vis_codigo SERIAL,
    vis_nombre VARCHAR(50),
    vis_apellido VARCHAR(50),
    vis_procedencia VARCHAR(100),
    vis_fechaingreso DATETIME YEAR TO MINUTE,
    vis_fechasalida DATETIME YEAR TO MINUTE,
    vis_motivo VARCHAR(200)
);