<?php
$link = false;

function openCon()
{
  global $link;
  $link = mysqli_connect("localhost", "root", "", "hospital");
  mysqli_query($link, "SET NAMES UTF8");
}


function closeCon()
{
  global $link;
  mysqli_close($link);
}

function getAllEmployee()
{
  global $link;
  openCon();

  $res = mysqli_query($link, "select EmployeeID, fullName, specialization, concat('Категория: ', ' ', category) AS 'category', experience from employee");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function verifyTheEmployeeExistence($fullName, $specialization, $category, $experience)
{
  global $link;
  $res = mysqli_query($link, "SELECT EmployeeID FROM employee WHERE fullName = '$fullName' AND specialization = '$specialization' AND category = '$category' AND experience = '$experience' LIMIT 1");
  return mysqli_num_rows($res);
}

function addAnEmployee($fullName, $specialization, $category, $experience)
{
  global $link;

  openCon();

  if (verifyTheEmployeeExistence($fullName, $specialization, $category, $experience) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "INSERT INTO	employee(employee.fullName, employee.specialization, employee.category, employee.experience) VALUES ('$fullName', '$specialization', '$category', '$experience')");

  closeCon();

  return $res;
};

function toDismissTheHeadChamber($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE ward SET headOfTheWardID = NULL
  WHERE headOfTheWardID = $id");

  closeCon();

  return $res;
}


function updateEmployeeInfo($id, $queryString)
{
  global $link;

  openCon();


  $res = mysqli_query($link, "UPDATE employee $queryString WHERE EmployeeID = $id");

  closeCon();

  return $res;
}

function getAllDepartments()
{
  global $link;

  openCon();


  $res = mysqli_query($link, "SELECT * FROM department");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function verifyExistenceOfDepartment($name)
{
  global $link;

  $res = mysqli_query($link, "SELECT departmentID FROM department WHERE departmentName = '$name' LIMIT 1");

  return mysqli_num_rows($res);
}

function addDepartment($name)
{
  global $link;

  openCon();

  if (verifyExistenceOfDepartment($name) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "INSERT INTO department (department.departmentName) VALUES ('$name')");

  closeCon();

  return $res;
}

function updateDepartmentNameByID($id, $name)
{
  global $link;

  openCon();

  if (verifyExistenceOfDepartment($name) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "UPDATE department SET departmentName = '$name' WHERE departmentID = $id");

  closeCon();

  return $res;
}

function verifyExistenceOfTheWard($wardNumber)
{
  global $link;

  $res = mysqli_query($link, "SELECT * FROM ward WHERE wardNumber = '$wardNumber'");

  return mysqli_num_rows($res);
}

function addWard($departmentID, $headOfTheWardID, $totalNumberOfBeds, $wardNumber)
{
  global $link;

  openCon();

  if (verifyExistenceOfTheWard($wardNumber) !== 0) {
    closeCon();
    return -1;
  };

  $res = mysqli_query($link, "INSERT INTO ward (departmentID, headOfTheWardID, totalNumberOfBeds, wardNumber) VALUES	($departmentID, $headOfTheWardID, $totalNumberOfBeds, $wardNumber)");

  closeCon();

  return $res;
}

function getAllWardInfo()
{
  global $link;

  openCon();


  $res = mysqli_query($link, "SELECT ward.wardID as 'id',department.departmentName as 'depName',  ward.totalNumberOfBeds as 'totalCount', ward.wardNumber, employee.fullName
  FROM ward LEFT JOIN employee ON ward.headOfTheWardID = employee.EmployeeID JOIN department ON ward.departmentID = department.departmentID");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updateWardInfo($id, $queryString)
{

  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE ward $queryString WHERE wardID = $id");

  closeCon();

  return $res;
}

function verifyExistenceOfPatient($passportData)
{
  global $link;

  $res = mysqli_query($link, "SELECT * FROM patient WHERE passportData = '$passportData'");

  return mysqli_num_rows($res);
}

function addPatient($passportData, $insuranceCompany, $insurancePolicyNumber)
{
  global $link;

  openCon();

  if (verifyExistenceOfPatient($passportData) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "INSERT INTO patient (passportData, insuranceCompany, insurancePolicyNumber) VALUES ('$passportData', '$insuranceCompany', '$insurancePolicyNumber')");

  closeCon();

  return $res;
}

function getAllPatients()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM patient ");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getPatientById($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT passportData, insuranceCompany, insurancePolicyNumber FROM patient WHERE patientID = $id");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updatePatientInfo($id, $newPassportData, $queryString)
{
  global $link;

  openCon();

  if (verifyExistenceOfPatient($newPassportData) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "UPDATE patient $queryString WHERE patientID = $id");

  return $res;
}

function verifyExistenceOfDisease($symbol, $number)
{
  global $link;

  $res = mysqli_query($link, "SELECT symbol FROM disease WHERE symbol = '$symbol' AND `number` = '$number' LIMIT 1");

  return mysqli_num_rows($res);
}

function addDisease($symbol, $number, $description)
{
  global $link;

  openCon();

  if (verifyExistenceOfDisease($symbol, $number) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "INSERT INTO disease (symbol, `number`, `description`) VALUES ('$symbol', '$number', '$description')");

  closeCon();

  return $res;
}

function getDiseasesList()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM disease");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updateDiseaseInfo($id, $symbol, $number, $queryString)
{
  global $link;

  openCon();

  if (verifyExistenceOfDisease($symbol, $number) !== 0) {
    closeCon();
    return -1;
  }

  $res = mysqli_query($link, "UPDATE disease $queryString WHERE diseaseID = $id");

  return $res;
}

function getListOfPatientsWithoutAnActiveCard()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM patient WHERE patient.patientID NOT IN (SELECT patient.patientID
FROM patient LEFT JOIN medicalCard ON patient.patientID = medicalcard.patientID LEFT JOIN discharge ON medicalcard.medicalCardID = discharge.medicalCardID
WHERE ISNULL(discharge.medicalCardID) AND !ISNULL(medicalcard.patientID) )");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function getlistOfNurses()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT EmployeeID, fullName FROM employee WHERE specialization = 'Медсестра' OR specialization = 'Старшая медсестра'");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function createCard($patientID, $EmployeeID, $reasonForAdmission)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO medicalcard (patientID, nurseOnDutyID, reasonForAdmission, dateAndTimeOfAdmission) VALUES('$patientID', '$EmployeeID', '$reasonForAdmission', SYSDATE())");

  closeCon();

  return $res;
}

function getPatientsWithoutWard()
{

  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT medicalcard.medicalCardID, patient.passportData, medicalcard.reasonForAdmission FROM medicalcard JOIN patient ON medicalcard.patientID = patient.patientID WHERE ISNULL(wardID)");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getDoctorsList()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT EmployeeID, fullName, specialization FROM employee WHERE !(specialization = 'Медсестра' OR  specialization = 'Старшая медсестра')");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getListOfVacantWards()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT ward.wardID as 'id', ward.wardNumber, department.departmentName, (ward.wardID) AS 'numberOfOccupiedPlaces', ward.totalNumberOfBeds
FROM ward left JOIN department ON ward.departmentID = department.departmentID 
left JOIN medicalcard ON ward.wardID = medicalcard.wardID LEFT JOIN discharge ON medicalcard.medicalCardID = discharge.medicalCardID
WHERE !ISNULL(medicalcard.medicalCardID) AND ISNULL(discharge.medicalCardID) OR ISNULL(medicalcard.medicalCardID)

GROUP BY ward.wardID, ward.wardNumber, department.departmentName, ward.totalNumberOfBeds
HAVING (ward.totalNumberOfBeds - numberOfOccupiedPlaces) > 0");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function setWard($medicalCardID, $wardID, $doctorOnDutyID, $initialInspectionData)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE medicalcard SET wardID = $wardID, doctorOnDutyID = $doctorOnDutyID, initialInspectionData = '$initialInspectionData' WHERE medicalCardID = $medicalCardID");

  closeCon();

  return $res;
}


function getPatientsOfCertainDoctor($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT medicalcard.medicalCardID, patient.passportData, medicalcard.initialInspectionData
FROM ward JOIN employee ON ward.headOfTheWardID = employee.EmployeeID JOIN medicalcard ON medicalcard.wardID = ward.wardID LEFT JOIN discharge ON discharge.medicalCardID = medicalcard.medicalCardID LEFT JOIN patient ON medicalcard.patientID = patient.patientID
WHERE employee.EmployeeID = $id AND ISNULL(discharge.medicalCardID)");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function addDiagnosis($medicalCardID, $diseaseID, $treatmentOfTheDiagnosis)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO diagnosis (medicalCardID, diseaseID, treatmentOfTheDiagnosis, installationDate) VALUES ($medicalCardID, $diseaseID, $treatmentOfTheDiagnosis,SYSDATE())");

  closeCon();

  return $res;
}

function getDiseaseID($symbol, $number)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT diseaseID FROM disease WHERE symbol = '$symbol' AND `number` = '$number'");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getDiagnosisListByID($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT  diagnosis.diagnosisID, diagnosis.treatmentOfTheDiagnosis, diagnosis.installationDate, disease.`description` FROM diagnosis JOIN disease ON diagnosis.diseaseID = disease.diseaseID  WHERE medicalCardID = $id");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updateDiagnosisByID($id, $queryString)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE diagnosis $queryString WHERE diagnosisID = $id");

  closeCon();

  return $res;
}

function deleteDiagnosisByID($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "DELETE FROM diagnosis WHERE diagnosisID = $id");

  closeCon();

  return $res;
}

function getAllAnalysis($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT analysis.AnalysisID AS 'id', analysis.analysisName AS 'name', analysis.dateOfAppointment AS 'dateSet', analysis.analysisResult as 'result', analysis.dateOfSetResult AS 'dateRes'
  FROM analysis JOIN medicalcard ON analysis.medicalCardID = medicalcard.medicalCardID WHERE medicalcard.medicalCardID = $id");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function addAnalysis($id, $analysisName)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO analysis (medicalCardID, analysisName, dateOfAppointment) VALUES ($id, '$analysisName', SYSDATE())");

  closeCon();

  return $res;
}

function deleteanalysisByID($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "DELETE FROM analysis WHERE AnalysisID = $id");

  closeCon();

  return $res;
}

function setResultOfTheAnalysis($id, $text)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE analysis SET analysisResult = '$text', dateOfSetResult = SYSDATE() WHERE AnalysisID = $id");

  closeCon();

  return $res;
}

function createDischarge($medicalCardID, $treatmentResults, $recommendations)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO discharge (medicalCardID, treatmentResults, recommendations, dateOfDischarge) VALUES ($medicalCardID, '$treatmentResults', '$recommendations', SYSDATE())");

  closeCon();

  return $res;
}

function getAllDischarges()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT discharge.medicalCardID, patient.passportData, discharge.treatmentResults, discharge.dateOfDischarge  FROM medicalcard JOIN discharge ON medicalcard.medicalCardID = discharge.medicalCardID JOIN patient ON patient.patientID = medicalcard.patientID");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updateDischarge($id, $queryString)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE discharge $queryString WHERE medicalCardID = $id");

  closeCon();

  return $res;
}

function deleteDischargeByID($id)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "DELETE FROM discharge WHERE medicalCardID = $id");

  closeCon();

  return $res;
}

function getAllPatientsWithActiveCard()
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT medicalcard.medicalCardID, patient.passportData
FROM medicalcard LEFT JOIN discharge ON medicalcard.medicalCardID = discharge.medicalCardID JOIN patient ON patient.patientID = medicalcard.patientID 
WHERE ISNULL(discharge.medicalCardID)");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getTaskList($idList)
{
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT patient.passportData, GROUP_CONCAT(diagnosis.treatmentOfTheDiagnosis SEPARATOR '. ') AS treatmentOfTheDiagnosis, ward.wardNumber FROM  diagnosis join (SELECT medicalcard.medicalCardID, diagnosis.diseaseID, MAX(diagnosis.installationDate) AS lastDate 
FROM medicalcard LEFT JOIN discharge ON medicalcard.medicalCardID = discharge.medicalCardID
JOIN diagnosis ON diagnosis.medicalCardID = medicalcard.medicalCardID
WHERE isnull(discharge.medicalCardID) AND diagnosis.medicalcardID IN ($idList)
GROUP BY medicalcard.medicalCardID, diagnosis.diseaseID) AS listOfRecentDiagnoses ON diagnosis.medicalCardID = listOfRecentDiagnoses.medicalCardID 
AND diagnosis.diseaseID = listOfRecentDiagnoses.diseaseID AND diagnosis.installationDate = listOfRecentDiagnoses.lastDate 
JOIN medicalcard ON listOfRecentDiagnoses.medicalCardID = medicalcard.medicalCardID 
JOIN patient ON patient.patientID = medicalcard.patientID
JOIN ward ON medicalcard.wardID = ward.wardID
WHERE !ISNULL(diagnosis.treatmentOfTheDiagnosis)
GROUP BY patient.passportData, ward.wardNumber");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
