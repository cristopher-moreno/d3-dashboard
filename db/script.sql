CREATE TABLE tbl_engine_data ( 
  id NUMBER (6) NOT NULL, 
  point_a NUMBER (6) NOT NULL, 
  point_b NUMBER (6) NOT NULL, 
  start_date DATE NOT NULL, 
  end_date DATE NOT NULL, 
  cost NUMBER (4,2) NOT NULL, 
  volume NUMBER (5,3) NOT NULL, 
  distance NUMBER (3) NOT NULL, 
  duration NUMBER (2) NOT NULL, 
  fuel_economy NUMBER (5,3) NOT NULL, 
  cost_rate NUMBER (3,2) NOT NULL, 
  PRIMARY KEY ( id ) 
 )


CREATE OR REPLACE PROCEDURE sp_insert_tbl_engine_data(

  p_id IN tbl_engine_data.id%TYPE,
  p_point_a IN tbl_engine_data.point_a%TYPE,
  p_point_b IN tbl_engine_data.point_b%TYPE,
  p_start_date IN tbl_engine_data.start_date%TYPE,
  p_end_date IN tbl_engine_data.end_date%TYPE,
  p_cost IN tbl_engine_data.cost%TYPE,
  p_volume IN tbl_engine_data.volume%TYPE)
IS
BEGIN

  INSERT INTO tbl_engine_data VALUES (
  p_id,
  p_point_a,
  p_point_b,
  p_start_date,
  p_end_date,
  p_cost,
  p_volume,
  ((p_point_b)-(p_point_a)),
  (TRUNC(p_end_date)-TRUNC(p_start_date)+1),
  ((p_point_b-p_point_a)/p_volume),
  (p_cost/(TRUNC(p_end_date)-TRUNC(p_start_date)+1))
  );

  COMMIT;

END;
/


