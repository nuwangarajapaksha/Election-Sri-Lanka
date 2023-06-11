<?php*/
session_start();
include './db_connection.php';

$electionNo = "";
$searchParty = "";
$partyNo = "";
$searchCandidate = "";

if (isset($_POST["electionNo"]) && isset($_POST["searchParty"]) && isset($_POST["partyNo"]) && isset($_POST["searchCandidate"])) {

    $electionNo = $_POST["electionNo"];
    $searchParty = $_POST["searchParty"];
    $partyNo = $_POST["partyNo"];
    $searchCandidate = $_POST["searchCandidate"];

    $isPartySaved = FALSE;
    $isCandidateSaved = FALSE;

    $queryPartyVotes = "SELECT * FROM party WHERE party_no = '" . $partyNo . "' ";
    $result = $connection->query($queryPartyVotes);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $partyVotes = $row["party_votes"] + 1;

        $queryPartyUpdate = "UPDATE party SET party_votes = '" . $partyVotes . "' WHERE party_no = '" . $partyNo . "'";

        if ($_SESSION["vote_count"] >= 3) {
            header("Location: ../vote.php?msgAlertVote=You have only 3 votes, Now they are over !&searchParty=$searchParty&partyNo=$partyNo&searchCandidate=$searchCandidate");
            die();
        } else {
            $isPartySaved = mysqli_query($connection, $queryPartyUpdate);
        }
    }

    $queryCandidateVotes = "SELECT * FROM candidate WHERE candidate_election_no = '" . $electionNo . "' ";
    $result = $connection->query($queryCandidateVotes);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $candidateVotes = $row["candidate_votes"] + 1;

        $queryCandidateUpdate = "UPDATE candidate SET candidate_votes = '" . $candidateVotes . "' WHERE candidate_election_no = '" . $electionNo . "'";

        if ($_SESSION["vote_count"] >= 3) {
            header("Location: ../vote.php?msgAlertVote=You have only 3 votes, Now they are over !&searchParty=$searchParty&partyNo=$partyNo&searchCandidate=$searchCandidate");
            die();
        } else {
            $isCandidateSaved = mysqli_query($connection, $queryCandidateUpdate);
        }

        if ($isPartySaved && $isCandidateSaved) {
            $_SESSION["vote_count"] += 1;
            header("Location: ../vote.php?msgAlertVote=Vote Successful !&searchParty=$searchParty&partyNo=$partyNo&searchCandidate=$searchCandidate");
            die();
        } else {
            header("Location: ../vote.php?msgAlertVote=Vote Successful !&searchParty=$searchParty&partyNo=$partyNo&searchCandidate=$searchCandidate");
            die();
        }
    }
}