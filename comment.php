<?php
$subject = $conn->query("SELECT NAME,ID FROM Subject");
$mySubjectID;
$assignment = $conn->query("SELECT ID,TITLE,SUBJECTID,COUNTLIMIT,DUEEND FROM CodeAssignment");
$myAssignmentID;
$submission = $conn->query("SELECT ASSIGNMENTID,STUDENTID,SUBMITCOUNT,SCORE FROM Submission");
while ($row = $subject->fetch_array()) {
    if ($row["NAME"] == "C++") { #나중에 본인의 과목으로 인식하도록 바꿀 것.
    echo "<td>" . $row["NAME"] . "</td>";
        $mySubjectID = $row["ID"];
        break;
    }
}
while ($row = $assignment->fetch_array()) {
    if ($row["SUBJECTID"] == $mySubjectID) {
        $myAssignmentID = $row["ID"];
        $myScore;
        while ($row2 = $submission->fetch_array()) {
            if ($row2["ASSIGNMENTID"] = $myAssignmentID && $row2["STUDENTID"] == "2") { #본인의 ID로 인식하도록 만들 것
            $myScore = $row2["SCORE"];
                break;
            }
        }
        $diff = -strtotime($row["DUEEND"]) + strtotime(date("Y-M-d H:i:s", time()));
        $leftTime;
        if ($diff <= 0) {
            $leftTime = "CLOSED";
        } else {
            $sec = $diff % 60;
            $min = intdiv($diff, 60) % 60;
            $hour = intdiv($diff, 60 * 60) % 24;
            $day = intdiv($diff, 60 * 60 * 24);
            $leftTime = $day . " day(s) " . $hour . ":" . $min . ":" . $sec;
        }

        echo "<td>" . $row["TITLE"] . "</td>";
        echo "<td>" . $myScore . "</td>";
        echo "<td>" . $row["COUNTLIMIT"] . "</td>";
        echo "<td>" . $leftTime . "</td>";

        break;
    }
}
mysqli_data_seek($submission, 0);

?>
