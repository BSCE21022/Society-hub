CREATE OR REPLACE VIEW count_complains AS
SELECT count(*) AS total_complains
FROM Complains
WHERE status = 'F';


CREATE OR REPLACE VIEW UserComplaintCount AS
SELECT house_no, COUNT(*) AS complain_count
FROM Complains
GROUP BY house_no;


CREATE OR REPLACE VIEW count_water_delivery AS
SELECT count(*) AS pending_orders
FROM WaterDelivery
WHERE CD > CURRENT_DATE;


CREATE OR REPLACE VIEW UserEventCount AS
SELECT house_no, COUNT(*) AS Event_count
FROM EventBooking
GROUP BY house_no;


CREATE OR REPLACE VIEW count_events AS
SELECT count(*) AS comming_events
FROM EventBooking
WHERE Date_event > CURRENT_DATE;


CREATE OR REPLACE VIEW complain_details AS
SELECT c.Category, c.Area, c.myTextArea, c.Urgency, c.CD, c.status, c.house_no, r.Phone as phonenum
FROM Complains c
JOIN Resident r ON c.house_no = r.HouseNum
WHERE status = 'F'
ORDER BY c.CD;


CREATE OR REPLACE VIEW EventBooking_details AS
SELECT e.Name_event, e.Type, e.StartTime, e.EndTime, e.Date_event, e.Facilities, e.event_space, e.Attendees, e.FoodCatering, e.Requests, e.cost_event, e.house_no, e.status, r.Phone as phonenum
FROM EventBooking e
JOIN Resident r ON e.house_no = r.HouseNum
WHERE e.Date_event > CURRENT_DATE
ORDER BY e.Date_event;

CREATE OR REPLACE VIEW WaterDelivery_details AS
SELECT w.CD, w.BottlesNo, w.Requests, w.cost, w.house_no, w.status, r.Phone as phonenum
FROM WaterDelivery w
JOIN Resident r ON w.house_no = r.HouseNum
WHERE w.CD > CURRENT_DATE
ORDER BY w.CD;


CREATE OR REPLACE VIEW UserDeliveryCount AS
SELECT house_no, COUNT(*) AS DeliverCount
FROM WaterDelivery
GROUP BY house_no;


CREATE OR REPLACE VIEW ManagementDirectory AS
SELECT CONCAT(COALESCE(FirstName, ''), ' ', COALESCE(LastName, '')) AS FullName, Phone, Designation
FROM Management;
    

CREATE OR REPLACE VIEW userDirectory AS
SELECT HouseNum, Phone
FROM Resident;
