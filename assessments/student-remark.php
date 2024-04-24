<html lang="en">

<?php
require('../settings.php');

if (isset($_REQUEST['student'])) {
	$id = $_POST["student"];
	$query = "SELECT s.*, c.* FROM students s INNER JOIN classes c ON s.class_id = c.id WHERE s.id = :id";
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($row) {
		$class_id = $row['class_id'];
		$class = $row['class'];
		$name = $row['firstName'] . ' ' . $row['lastName'];
		$sex = $row['gender'];
		$admission_no = $row['admission_no'];
		// $section = $row['section'];

		if ($admission_no != null) {
			$query_session = "SELECT * FROM `general_settings`";
			$stmt_session = $pdo->query($query_session);
			$session_row = $stmt_session->fetch(PDO::FETCH_ASSOC);
			$curr_session = $session_row['curr_session'];
			$curr_term = $session_row['curr_term'];
			$school_name = $session_row['school_name'];
			$days_opened = $session_row['days_opened'];

			// Your further code logic goes here
		}


		?>


		<head>

			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=0.1, shrink-to-fit=no">
			<title>Report</title>
			<style>
				body {
					height: 100vh;
				}

				@page {
					size: A4;
					margin: 0;
				}

				@media print {

					html,
					body {
						width: 210mm;
						height: 297mm;
					}
				}

				body {
					margin: 0;
					background: -webkit-linear-gradient(45deg, #fc5c7d, #5f2c82);
					background: linear-gradient(to left, #302b63, #49a09d, #0083b0);
					/* background: linear-gradient(45deg, #49a09d, #5f2c82); */
					font-family: sans-serif;
					font-weight: 50;
				}

				.container {
					position: relative;
					top: 50%;
					left: 50%;
					-webkit-transform: translate(-50%, -50%);
					transform: translate(-50%, -50%);
				}

				table {
					padding: 1% 10;
					overflow: hidden;
					box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
				}

				th,
				td {
					font-size: 12px;
					padding: 6px;
					background-color: rgba(255, 255, 255, 0.726);
					color: rgb(0, 0, 0);
				}

				td {
					border-radius: 5px;
					font-family: 'Courier New', Courier, monospace;
				}

				th {
					text-align: left;
					font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
				}

				thead th {
					background-color: #558f5a;
				}

				tbody tr:hover {
					background-color: rgba(228, 15, 15, 0);
				}

				tbody td {
					position: relative;
					font-weight: 700;
				}

				tbody td:hover:before {
					content: "";
					position: absolute;
					left: 0;
					right: 0;
					top: -9999px;
					bottom: -9999px;
					background-color: rgba(255, 255, 255, 0.2);
					z-index: -1;
				}

				.parent {
					padding: 1px 1px;
					padding-left: 18%;
					display: grid;
					grid-template-columns: 1fr 1fr;
					grid-gap: 50px;
					border: 10px;
					font-size: 12px;

				}

				.child {
					margin: 5px;
					border: 1px;
					text-transform: uppercase;
				}

				.parent1 {
					padding: 1px;
					margin: 1rem;
					padding: 1rem 1rem;
					text-align: center;
					display: inline;

				}

				.child1 {
					text-align: left;
					display: inline-block;
					border: 1px;
					padding: 1rem 3.5rem;
					padding-left: 20px;
					padding-top: 10px;
					margin-top: -20px;
					margin-bottom: -30px;
					vertical-align: middle;
				}

				.head {
					background-color: rgb(657, 923, 303);
					border-radius: 200px 200px 2000px 2000px;
					padding-top: 18px;
					padding-bottom: 10px;
					margin-right: 200px;
					margin-left: 200px;
				}

				.column1 {
					padding-left: 20;
					display: inline-flex;
				}

				.child2 {
					padding: 1% 20%;
					/* padding-right: 20%; */
					padding-left: 5%;
					padding-right: 5%;
					display: inline-flex;
				}

				.child3 {
					padding: 1% 20%;
					/* padding-right: 20%; */
					padding-left: 10%;
					padding-right: 5%;
					display: inline-flex;
				}

				input {
					background: none;
					border: 0px;
					border-bottom: 101px;
				}

				textarea {
					background: none;
				}
			</style>
		</head>

		<body>

			<div class="head">
				<center>
					<strong>
						<?php echo $school_name; ?><br>End Of Term Report Sheet
					</STRong>
				</center>
			</div>
			</br>
			<div class="parent">
				<div class="child">
					<P>STUDENT:
						<?php echo $name; ?>
					</P>
					<P>SEX:
						<?php echo $sex; ?>
					</P>
					<P>REG NO:
						<?php echo $admission_no; ?>
					</P>
					<P>SESSION:
						<?php echo $curr_session; ?>
					</P>
					<P>TERM:
						<?php echo $curr_term; ?>
					</P>
					<?php
					$query_rank = "SELECT student_id, SUM(mark) AS total_marks 
FROM assessment_marks 
WHERE class_id = :class_id 
AND session_id = :session_id 
AND term = :term 
GROUP BY student_id 
ORDER BY total_marks DESC";
					$stmt_rank = $pdo->prepare($query_rank);
					$stmt_rank->bindParam(':class_id', $class_id, PDO::PARAM_INT); // Assuming $class_id is set in your code
					$stmt_rank->bindParam(':session_id', $session_id, PDO::PARAM_INT);
					$stmt_rank->bindParam(':term', $term, PDO::PARAM_INT);
					$stmt_rank->execute();

					// Initialize rank counter
					$rank = 0;

					// Loop through the results to find the student's rank
					while ($row = $stmt_rank->fetch(PDO::FETCH_ASSOC)) {
						$rank++;
						if ($row['student_id'] == $id) {
							// Display the rank of the student
							echo "<p>GRADE: " . $rank . "</p>";
							break; // Exit the loop once the student's rank is found
						}
					}
					?>
				</div>

				<div class="child">
					<P> CLASS:
						<?php echo $class; ?>
					</P>
					<P>NUMBER IN CLASS:
						<?php
						$count = "SELECT * FROM `students` WHERE `class_id` = :class_id";
						$stmt = $pdo->prepare($count);
						$stmt->bindParam(':class_id', $class_id);
						$stmt->execute();
						$row_count = $stmt->fetchAll(PDO::FETCH_ASSOC);
						echo count($row_count);
						?>
					</P>
					<P>NUM OF DAYS SCH OPEN:
						<?php echo $days_opened; ?>
					<P>NUM OF DAYS PRESENT: <input type="text" size="10"></input></P>
					<P>NUM OF DAYS ABSENT: <input type="text" size="10"></input></P>
				</div>
			</div>

			<center>
				<table>
					<thead>
						<tr>
							<th>SUBJECTS</th>
							<?php
							// Query to fetch assessment types for the class
							$query_assessment_types = "SELECT * FROM assessment_types WHERE class_id = :class_id";
							$stmt_assessment_types = $pdo->prepare($query_assessment_types);
							$stmt_assessment_types->bindParam(':class_id', $class_id, PDO::PARAM_INT);
							$stmt_assessment_types->execute();
							$assessment_types = $stmt_assessment_types->fetchAll(PDO::FETCH_ASSOC);

							// Loop through assessment types to display table headers
							foreach ($assessment_types as $assessment_type) {
								echo "<th>" . $assessment_type['assessment_type'] . "</th>";
							}
							?>
							<th>TOTAL MARKS</th>
							<TH>SUBJECT GRADE</TH>
							<th>HIGHEST SCORE</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Query to fetch subjects for the class
						$query_subjects = "SELECT * FROM subjects WHERE class_id = :class_id ORDER BY subject ASC";
						$stmt_subjects = $pdo->prepare($query_subjects);
						$stmt_subjects->bindParam(':class_id', $class_id, PDO::PARAM_INT);
						$stmt_subjects->execute();
						$subjects = $stmt_subjects->fetchAll(PDO::FETCH_ASSOC);

						// Loop through subjects
						foreach ($subjects as $subject) {
							echo "<tr>";
							echo "<td>" . $subject['subject'] . "</td>";

							// Loop through assessment types to display marks for each type
							foreach ($assessment_types as $assessment_type) {
								$assessment_id = $assessment_type['assessment_id'];

								// Query to fetch marks for the assessment type, subject, and student
								$query_marks = "SELECT mark FROM assessment_marks 
                                WHERE student_id = :student_id 
                                AND assessment_id = :assessment_id 
                                AND subject_id = :subject_id 
                                AND session_id = :session_id 
                                AND term = :term";
								$stmt_marks = $pdo->prepare($query_marks);
								$stmt_marks->bindParam(':student_id', $id, PDO::PARAM_INT);
								$stmt_marks->bindParam(':assessment_id', $assessment_id, PDO::PARAM_INT);
								$stmt_marks->bindParam(':subject_id', $subject['id'], PDO::PARAM_INT);
								$stmt_marks->bindParam(':session_id', $session_id, PDO::PARAM_INT);
								$stmt_marks->bindParam(':term', $term, PDO::PARAM_INT);
								$stmt_marks->execute();
								$marks = $stmt_marks->fetch(PDO::FETCH_ASSOC);

								// Display marks for the assessment type
								echo "<td>" . ($marks ? $marks['mark'] : '') . "</td>";
							}

							// Calculate and display total marks for the subject
							$total_marks_query = "SELECT SUM(mark) AS total_marks 
                                  FROM assessment_marks 
                                  WHERE student_id = :student_id 
                                  AND subject_id = :subject_id 
                                  AND session_id = :session_id 
                                  AND term = :term";
							$stmt_total_marks = $pdo->prepare($total_marks_query);
							$stmt_total_marks->bindParam(':student_id', $id, PDO::PARAM_INT);
							$stmt_total_marks->bindParam(':subject_id', $subject['id'], PDO::PARAM_INT);
							$stmt_total_marks->bindParam(':session_id', $session_id, PDO::PARAM_INT);
							$stmt_total_marks->bindParam(':term', $term, PDO::PARAM_INT);
							$stmt_total_marks->execute();
							$total_marks = $stmt_total_marks->fetchColumn();

							echo "<td>" . $total_marks . "</td>";

							// Determine and display subject grade based on total marks
							echo "<td>";
							if ($total_marks <= 39) {
								echo "FAILED 'F'";
							} elseif ($total_marks >= 40 && $total_marks <= 49) {
								echo "PASS 'E'";
							} elseif ($total_marks >= 50 && $total_marks <= 59) {
								echo "SATISFACTORY 'D'";
							} elseif ($total_marks >= 60 && $total_marks <= 69) {
								echo "GOOD 'C'";
							} elseif ($total_marks >= 70 && $total_marks <= 79) {
								echo "VERY GOOD 'B'";
							} elseif ($total_marks >= 80 && $total_marks <= 100) {
								echo "EXCELLENT 'A'";
							} else {
								echo "Invalid Total Marks"; // or any default message
							}
							echo "</td>";

							// Query to fetch highest score for the subject
							$query_highest_score = "SELECT MAX(total_marks) AS highest_score 
							FROM (SELECT SUM(mark) AS total_marks 
								  FROM assessment_marks 
								  WHERE subject_id = :subject_id 
								  AND session_id = :session_id 
								  AND term = :term 
								  GROUP BY student_id) AS max_scores";
							$stmt_highest_score = $pdo->prepare($query_highest_score);
							$stmt_highest_score->bindParam(':subject_id', $subject['id'], PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':session_id', $session_id, PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':term', $term, PDO::PARAM_INT);
							$stmt_highest_score->execute();
							$highest_score = $stmt_highest_score->fetchColumn();

							echo "<td>" . $highest_score . "</td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</center>





			<center>
				<div class="child2">
<?php
				// Query to fetch highest score for the subject
							$query_highest_score = "SELECT MAX(total_marks) AS highest_score 
							FROM (SELECT SUM(mark) AS total_marks 
								  FROM assessment_marks 
								  WHERE student_id = :student_id 
								  AND session_id = :session_id 
								  AND term = :term 
								  GROUP BY student_id) AS max_scores";
							$stmt_highest_score = $pdo->prepare($query_highest_score);
							$stmt_highest_score->bindParam(':student_id', $id, PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':session_id', $session_id, PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':term', $term, PDO::PARAM_INT);
							$stmt_highest_score->execute();
							$highest_score = $stmt_highest_score->fetchColumn();

							echo "<p> Total Scores: " . $highest_score . "</p>"; 
							?>
				</div>
				<div class="child2">
				<?php
				// Query to fetch highest score for the subject
							$query_highest_score = "SELECT MAX(total_marks) AS highest_score 
							FROM (SELECT SUM(mark) AS total_marks 
								  FROM assessment_marks 
								  WHERE session_id = :session_id 
								  AND term = :term 
								  GROUP BY student_id) AS max_scores";
							$stmt_highest_score = $pdo->prepare($query_highest_score);
							// $stmt_highest_score->bindParam(':student_id', $id, PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':session_id', $session_id, PDO::PARAM_INT);
							$stmt_highest_score->bindParam(':term', $term, PDO::PARAM_INT);
							$stmt_highest_score->execute();
							$highest_score = $stmt_highest_score->fetchColumn();

							echo "<p> Class Highest: " . $highest_score . "</p>"; 
							?>
				</div>



				<div>

					<input type="checkbox" name="punc" id="">
					<label for="punc">Punctuality </label>

					<input type="checkbox" name="neet" id="">
					<label for="neet">Neetness </label>

					<input type="checkbox" name="poll" id="">
					<label for="poll">Politeness </label>


					<input type="checkbox" name="atten" id="">
					<label for="atten">Attentiveness </label>

					<input type="checkbox" name="comm" id="">
					<label for="comm">Communication </label>

					<input type="checkbox" name="skills" id="">
					<label for="skills">Skills </label>
				</div>


			</center>


			<br>
			<div class="child2">

				<p>Class Teacher Remark</p><button>Add</button>
				<br>
				<br>
			</div>

			<div class="child2">
				<br>
				<br>
				<p>Islamiyya Teacher Remark</p><button>Add</button>
			</div>

			<br>






			<div class="child3">
				<p>Next Term School Fees:
					<?php
					$k = "SELECT * FROM `classes` WHERE `class` = '$class'";
					$l = mysqli_query($con, $k);
					while ($m = mysqli_fetch_assoc($l)) {
						$j = $m['section'];
						$o = "SELECT * FROM `sections` WHERE `section` = '$j'";
						$p = mysqli_query($con, $o);
						while ($q = mysqli_fetch_assoc($p)) {
							echo '₦ ' . $q['fees'];
						}
					}
					?>
				</p>
			</div>
			<div class="child2">
				<p>Next Term Resumption Date:
					<?php
					$k = "SELECT * FROM `classes` WHERE `class` = '$class'";
					$l = mysqli_query($con, $k);
					while ($m = mysqli_fetch_assoc($l)) {
						$j = $m['section'];
						$o = "SELECT * FROM `sections` WHERE `section` = '$j'";
						$p = mysqli_query($con, $o);
						while ($q = mysqli_fetch_assoc($p)) {
							echo $q['resumption'];
						}
					}
					?>
				</p>
			</div>

		</body>
	<?php } else { ?>
		<center>
			<p style="margin-top: 15rem;">Invalid Or No Data Found</p>
		</center>
		<?php header('refresh:2; url=index.php');
	} ?>
<?php } else { ?>
	<center>
		<p style="margin-top: 15rem;">Invalid Or No Data Found</p>
	</center>
	<?php header('refresh:2; url=index.php');
} ?>

</html>