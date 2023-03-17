<?php
$voterAge= 15;
$hasPVC=true;
$voterWard= 020;
if ($voterAge< 18) {
    echo "Sorry, you must be at least 18 years old to vote.";
  } else if (!$hasPVC) {
    echo "Sorry, you must have a Permanent Voter's Card (PVC) to vote.";
  } else if ($voterWard !== 020) {
    echo "Sorry, you are not registered to vote in this ward.";
  } else {
    echo "Voter eligible to vote.";
  }
?>