<?php
require_once '../settings.php';
// Staff data
$staffData = [
    [
        'first_name' => 'Sameera',
        'last_name' => 'Bashir',
        'dob' => '1988-09-17',
        'mobile_number' => '8039683446',
        'gender' => 'Female',
        'qualifications' => 'BSc. Education Biology',
        'current_address' => '7 Muftau Bello Street, Dawaki, Abuja',
        'permanent_address' => '8 Ramat Rd, Ungwan Rimi, Kaduna',
        'email' => 'sammybash88email@gmail.com',
        'salary' => 70000,
        'bank_name' => 'GTBank',
        'account_name' => 'Muhammad/Halima',
        'account_number' => '0129396847',
        'employment_date' => '2020-06-01',
        'status' => 1,
        'designation_id' => 1,
    ],
    // [
    //     'first_name' => 'Charity',
    //     'last_name' => 'Ikwo Nnamani',
    //     'dob' => '1979-01-20',
    //     'mobile_number' => '9061329564',
    //     'gender' => 'Female',
    //     'qualifications' => 'BSc. Education Maths',
    //     'current_address' => 'Oguntoyinbo Street, Behind UP RCCG, New Madalla, Niger State',
    //     'permanent_address' => 'Christ Embassy Ecowas Hall Madalla',
    //     'email' => 'charityikwo@gmailcom',
    //     'salary' => 80000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Apt Chidi Augustine',
    //     'account_number' => '2368878509',
    //     'employment_date' => '2018-09-10',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // // Add more staff information as needed
    // [
    //     'first_name' => 'Tawfiq Huzayfah',
    //     'last_name' => 'Bello',
    //     'dob' => '1995-02-17',
    //     'mobile_number' => '811679204',
    //     'gender' => 'Male',
    //     'qualifications' => 'BSc. Industrial Chemistry',
    //     'current_address' => 'School Ludge, Panaf Drive Zone 7, Dutse Alhaji',
    //     'email' => 'bthuzayfah@gmail.com',
    //     'salary' => 80000,
    //     'bank_name' => 'Access',
    //     'account_name' => 'Jamiu Bello',
    //     'account_number' => '0811679204',
    //     'employment_date' => '2023-08-01',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Abdulmajid',
    //     'last_name' => 'Surajo',
    //     'dob' => '1995-12-31',
    //     'mobile_number' => '8101051058',
    //     'gender' => 'Male',
    //     'qualifications' => 'BSc. Education Economics',
    //     'current_address' => 'School Lodge, Abdullah Aminichi Road, Funtua, Katsina State',
    //     'email' => 'abdulmajidsurajo424@gmail.com',
    //     'salary' => 65000,
    //     'bank_name' => 'Access',
    //     'account_name' => 'Khadija Abdulmajid',
    //     'account_number' => '0729307604',
    //     'employment_date' => '2018-09-13',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Sadiq Rabi',
    //     'last_name' => 'Eneze',
    //     'dob' => '1992-07-06',
    //     'mobile_number' => '9037926633',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Winners Street off Small Sele, Dawaki',
    //     'email' => 'rabisadiq45@gmail.com',
    //     'salary' => 60000,
    //     'bank_name' => 'UBA',
    //     'account_name' => 'Nabila Usman',
    //     'account_number' => '2134010388',
    //     'employment_date' => '2018-06-15',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Aisha Aliyu',
    //     'last_name' => 'Muhammad',
    //     'dob' => '1986-02-27',
    //     'mobile_number' => '7039089000',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'C11 Zone 1, Dutse Alhaji',
    //     'permanent_address' => 'C11 Zone 1, Dutse Alhaji',
    //     'email' => 'aishataliyu62@gmail.com',
    //     'salary' => 55000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Aliyu/Muhammad',
    //     'account_number' => '2007037337',
    //     'employment_date' => '2022-10-05',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],

    // [
    //     'first_name' => 'Rahinatu',
    //     'last_name' => 'Shehu',
    //     'dob' => '1995-05-16',
    //     'mobile_number' => '8131019251',
    //     'gender' => 'Female',
    //     'qualifications' => 'BSc. Primary Education',
    //     'current_address' => '107, Zone B, Sokale Dutse Alhaji',
    //     'permanent_address' => 'Ogane-Oda, Ofugo, Ankpa, Kogi',
    //     'email' => 'shehurahinatu01@gmail.com',
    //     'salary' => 55000,
    //     'bank_name' => 'GTBank',
    //     'account_name' => 'Amaullah',
    //     'account_number' => '0233721757',
    //     'employment_date' => '2024-01-09',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Jamila Ismail',
    //     'last_name' => 'Alhassan',
    //     'dob' => '1986-04-06',
    //     'mobile_number' => '8035018370',
    //     'gender' => 'Female',
    //     'qualifications' => 'BSc. Education Maths',
    //     'current_address' => '2 Kelvin Akang Street, Dawaki Abuja',
    //     'permanent_address' => 'BH22 Rahama Close Sabon Gari, off Nnamdi Azikwe Express Way, Kaduna',
    //     'email' => 'visitjamila@yahoo.com',
    //     'salary' => 60000,
    //     'bank_name' => 'Jaiz',
    //     'account_name' => 'Jamila Ismail Alhassan',
    //     'account_number' => '0002931519',
    //     'employment_date' => '2021-01-10',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],

    // [
    //     'first_name' => 'Musa',
    //     'last_name' => 'Tanimu',
    //     'dob' => '1990-04-18',
    //     'mobile_number' => '8160850921',
    //     'gender' => 'Male',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Zone1 opp Kcee Hotel Dutse, opp FGC Kwali Abuja',
    //     'permanent_address' => 'Zone1 opp Kcee Hotel Dutse, opp FGC Kwali Abuja',
    //     'email' => 'musatanimu567@gmail.com',
    //     'salary' => 40000,
    //     'bank_name' => 'Eco',
    //     'account_name' => 'Musa Tanimu',
    //     'account_number' => '5841054002',
    //     'employment_date' => '2023-09-30',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],

    // [
    //     'first_name' => 'Hajara',
    //     'last_name' => 'Isah',
    //     'dob' => '1987-10-19',
    //     'mobile_number' => '813289523',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Sokale Dutse behind Ekwa Church',
    //     'permanent_address' => 'Sokale Dutse behind ECWA Church',
    //     'email' => 'isahhajara979@gmail.com',
    //     'salary' => 50000,
    //     'bank_name' => 'GTBank',
    //     'account_name' => 'Hajara Isah',
    //     'account_number' => '0177458146',
    //     'employment_date' => '2023-09-04',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Ayobami Awolade',
    //     'last_name' => 'Samuel',
    //     'dob' => '1992-12-03',
    //     'mobile_number' => '703609231',
    //     'gender' => 'Male',
    //     'qualifications' => 'BSc Computer Science',
    //     'current_address' => 'Dutse Alhaji before High Tension Peace Avenue along RCCG',
    //     'permanent_address' => 'Dutse Alhaji before High Tension Peace Avenue along RCCG',
    //     'email' => 'ayobamisamuel84@gmail.com',
    //     'salary' => 55000,
    //     'bank_name' => 'Access',
    //     'account_name' => 'Ayobami Awolade Samuel',
    //     'account_number' => '0036477112',
    //     'employment_date' => '2023-02-06',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Kudirat',
    //     'last_name' => 'Sule',
    //     'dob' => '1991-04-25',
    //     'mobile_number' => '7064582999',
    //     'gender' => 'Female',
    //     'qualifications' => 'ND',
    //     'current_address' => 'Barnabas Street Zone1 Dutse Alhaji',
    //     'permanent_address' => 'Barnabas Street Zone1 Dutse Alhaji',
    //     'email' => 'princeokema1@gmail.com',
    //     'salary' => 50000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Kudirat Sule',
    //     'account_number' => '2217695460',
    //     'employment_date' => '2021-09-01',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Zainab',
    //     'last_name' => 'Abubakar',
    //     'mobile_number' => '8036538181',
    //     'gender' => 'Female',
    //     'qualifications' => 'MSC Education Planning',
    //     'current_address' => '17 Rufus Nduba',
    //     'permanent_address' => '17 Rufus Nduba',
    //     'email' => 'zaynabaobankole@gmail.com',
    //     'salary' => 50000,
    //     'bank_name' => 'GTBank',
    //     'account_name' => 'Zainab Abubakar',
    //     'account_number' => '0112258363',
    //     'employment_date' => '2017-01-01',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Muhammad',
    //     'last_name' => 'Bashir',
    //     'dob' => '2004-03-27',
    //     'mobile_number' => '9038306669',
    //     'gender' => 'Male',
    //     'qualifications' => 'NECO',
    //     'current_address' => 'School Lodge, Kaduna',
    //     'email' => 'muhammadbash24272zaynabaobankole@gmail.com',
    //     'salary' => 45000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Muhammad Bashir',
    //     'account_number' => '2427267701',
    //     'employment_date' => '2022-12-24',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Maryam Adeyemo',
    //     'last_name' => 'Ololade',
    //     'dob' => '2000-02-13',
    //     'mobile_number' => '8133963834',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Sokale 2nd High Tension',
    //     'permanent_address' => 'Asolo Ibadan',
    //     'email' => '08133963834/09028391592',
    //     'salary' => 50000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Maryam Adeyemo Ololade',
    //     'account_number' => '2387926225',
    //     'employment_date' => '2023-08-14',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Nankling',
    //     'last_name' => 'Ezekeil',
    //     'dob' => '1982-08-28',
    //     'mobile_number' => '80353343399',
    //     'gender' => 'Female',
    //     'qualifications' => 'BSc. Public Health',
    //     'current_address' => '75 Panaf Drive Dawaki',
    //     'permanent_address' => '75 Panaf Drive Dawaki',
    //     'email' => 'nanklingdeblessed01@gmail.com',
    //     'salary' => 60000,
    //     'bank_name' => 'Zenith',
    //     'account_name' => 'Nankling Ezekeil',
    //     'account_number' => '2416155648',
    //     'employment_date' => '2024-01-08',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Hamza',
    //     'last_name' => 'Abdulmumin',
    //     'dob' => '2020-10-08',
    //     'mobile_number' => '8133412441',
    //     'gender' => 'male',
    //     'qualifications' => 'HND Biochemistry',
    //     'current_address' => 'Sunukaboard New Jerusalem Dutse Makaranta',
    //     'permanent_address' => 'Ofakaga Ofu Kga Kogi State',
    //     'email' => 'hamzaabdulmumeen97@gmail.com',
    //     'emergency_contact' => '8140417000',
    //     'salary' => 75000,
    //     'status' => 0,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Khadija Adam',
    //     'last_name' => 'Bappa',
    //     'dob' => '1982-05-05',
    //     'mobile_number' => '8039499088',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'New Extension Dawaki',
    //     'permanent_address' => 'Same as current address',
    //     'email' => 'abkhadisme@gmail.com',
    //     'emergency_contact' => '8039499088',
    //     'salary' => 55000,
    //     'bank_name' => 'GT',
    //     'account_name' => 'Khadija Adam Bappa',
    //     'account_number' => '0027613196',
    //     'employment_date' => '2022-02-02',
    //     'status' => 2,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Aisha',
    //     'last_name' => 'Auwal',
    //     'dob' => '1992-06-02',
    //     'mobile_number' => '9024397874',
    //     'gender' => 'Female',
    //     'current_address' => 'Junior Secondary School Zone 1 Dutse, Suleja',
    //     'email' => 'aishaussaini039@gmail.com',
    //     'emergency_contact' => '9133385835',
    //     'qualifications' => '4',
    //     'experience' => 'Adam/Amina',
    //     'salary' => 55000,
    //     'bank_name' => 'Zenith',
    //     'account_number' => '2217639985',
    //     'employment_date' => '2019-01-05',
    //     'status' => 0,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Saleh',
    //     'last_name' => 'Lawal',
    //     'dob' => '1996-06-05',
    //     'mobile_number' => '9061513118',
    //     'gender' => 'Male',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Staff Lodge, Taban Sani, Kudan, Kaduna State',
    //     'email' => 'lawalsaleh789@gmail.com',
    //     'emergency_contact' => '09061513118/08101051058',
    //     'experience' => 'Uumar',
    //     'salary' => 60000,
    //     'bank_name' => 'Access',
    //     'account_number' => '0738131298',
    //     'employment_date' => '2021-09-17',
    //     'status' => 4,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Haruna',
    //     'last_name' => 'Hussien',
    //     'dob' => '1987-07-22',
    //     'mobile_number' => '7032679425',
    //     'gender' => 'Male',
    //     'qualifications' => 'HND Civil Engineering',
    //     'current_address' => 'Staff Lodge, Kaduna',
    //     'email' => 'binhusayn9258@gmail.com',
    //     'emergency_contact' => '7060877642',
    //     'experience' => 'Abdulrasheed/Abdulkareem',
    //     'salary' => 90000,
    //     'bank_name' => 'Jaiz',
    //     'account_number' => '0012243217',
    //     'employment_date' => '2022-08-08',
    //     'status' => 11,
    //     'designation_id' => 1,
    // ],
    // [
    //     'first_name' => 'Mallam',
    //     'last_name' => 'Gunchit',
    //     'dob' => '1999-09-29',
    //     'mobile_number' => '9072154787',
    //     'gender' => 'Female',
    //     'qualifications' => 'NCE',
    //     'current_address' => 'Rockville Estate, Jos',
    //     'email' => 'guncitmalam50@gmail.com',
    //     'emergency_contact' => '07038405452/08163974365',
    //     'experience' => 'Isaac/Hajratu',
    //     'salary' => 40000,
    //     'bank_name' => 'UBA',
    //     'account_number' => '2139467341',
    //     'employment_date' => '2024-02-12',
    //     'status' => 1,
    //     'designation_id' => 1,
    // ]
    
];



// Insert staff data into the database
foreach ($staffData as $staff) {
    // Hash the email address as password
    $password = password_hash($staff['email'], PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO staffs (first_name, last_name, dob, mobile_number, gender, qualifications, current_address, email, experience, salary, bank_name, account_number, employment_date, status, designation_id, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Execute the statement
    $stmt->execute([
        $staff['first_name'],
        $staff['last_name'],
        $staff['dob'],
        $staff['mobile_number'],
        $staff['gender'],
        $staff['qualifications'],
        $staff['current_address'],
        $staff['email'],
        // $staff['experience'],
        $staff['salary'],
        $staff['bank_name'],
        $staff['account_number'],
        $staff['employment_date'],
        $staff['status'],
        $staff['designation_id'],
        $password
    ]);
}

echo "Staff data inserted successfully.";

?>
