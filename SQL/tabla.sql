
CREATE TABLE visitas (
    vis_codigo SERIAL,
    vis_nombre VARCHAR(50),
    vis_apellido VARCHAR(50),
    vis_procedencia VARCHAR(100),
    vis_fechaingreso DATETIME hour TO minute,
    vis_fechasalida DATETIME hour TO minute,
    vis_motivo VARCHAR(200)
);