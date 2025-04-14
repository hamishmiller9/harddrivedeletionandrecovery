<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Project - Testing the Effectiveness of Common Deletion Methods and Data Recoverability Post-Deletion</title>
    <link rel="stylesheet" href="../assets/style.css">  
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="content-wrapper">
        <?php include '../includes/header.php'; ?>
        <div class="main-content">
            <h2>About the Project</h2>
            <h3>What is this project about?</h3>
                <p>This project evaluates the effectiveness and efficiency of various common data deletion techniques in ensuring the irretrievable removal of data from hard disk drives (HDDs), with the goal of providing actionable insights for improving data privacy practices. It aims to provide a comprehensive analysis of the most prevalent data deletion techniques, analysing their reliability and susceptibility to forensic recovery. Given the importance of data security for both personal and professional users, this study will critically evaluate the following commonly used data deletion methods:</p>
                <ul>
                    <li>File deletion using built-in graphical Microsoft Windows 11 tools (e.g. Recycle Bin and Disk Management Quick Format)</li>
                    <li>Secure deletion with specialised software (Eraser, File Shredder, WipeFile)</li>
                    <li>Disk wiping using Windows Diskpart (as an alternative to Low-Level-Formatting)</li>
                    <li>Physical destruction</li>
                </ul>
                <p>Each method will be analysed and extensively tested against forensic recovery tools such as OpenText EnCase, FTK Imager and Autopsy. These well known, industry standard data recovery tools will be utilised in attempting to recover test data, post deletion. Additionally, the time taken to complete each deletion method will be recorded and analysed, providing insights into the compromises between security and efficiency. The project will provide evidence-based insights into the strengths and limitations of each of these methods, providing actionable recommendations designed to improve secure data deletion practices. 
                Additionally, a core outcome of this project is the development of a user-friendly, web-based interface, enabling both individuals and organisations to easily review the findings and learn about more thorough practices in achieving secure data deletion. Thus, combining the theoretical analysis with practical guidance, this project aims to raise awareness of the vulnerabilities within commonly used data deletion methods, contributing to better security awareness and practices.</p>

            <h3>What is secure deletion?</h3>
                <p>Secure data deletion is the practice of erasing or overwriting all traces of existing data from a storage device, with the original data becoming inaccessible with no possibility of reconstruction. This differs from methods like the Recycle Bin, of which only marks sectors as available for reuse, without overwriting or removing the data. Failure to securely delete data can have severe consequences. The ICO provide guidance for organisations on securely disposing of electronic data, emphasising the importance of using secure data deletion methods. The ICO states “if personal information in electronic records is not destroyed securely, it may be recoverable. This may breach GDPR articles 5(1)(f) and 32”, of which requires organisations to process data securely, protected against unauthorised access, loss or destruction.</p>
                <p>Furthermore, the increasing threat of cyber-crime, as highlighted in the Cyber Security Breaches Survey 2024, underscores the importance of effective data sanitisation methods, with cyber-criminals exploiting improperly disposed data to retrieve confidential information. This risk extends beyond professional environments to personal users, who may be susceptible to private data exposure if old devices are disposed of without ensuring adequate data sanitation. By highlighting reliable deletion techniques, this project aims to increase awareness into security and privacy and prevent potential security breaches.</p>
            <h3>Isn't the Recycle Bin enough to delete files forever?</h3>
                <p>One of the most common misconceptions is that data deletion through the Recycle Bin built into Microsoft Windows 11 (as well as previous iterations of the Windows operating system), permanently removes data from the storage device. Microsoft themselves reinforce this misconception through a system warning shown upon attempting to empty the Recycle Bin. The message states: “Are you sure that you want to permanently delete this file?” This question implies that a file deleted through the Recycle Bin becomes permanently inaccessible. Yet, this process only removes the file reference, marking the sectors as available for use without erasing the data within the sectors. This could result in forensic recovery tools retrieving previously deleted files assumed to be irrecoverable unless they have been securely overwritten or physically destroyed. Such misconceptions can result in privacy and security vulnerabilities, particularly in professional settings where strict General Data Protection Regulation (GDPR) adherence is mandatory.</p>
                <br>
                <b>Please continue to Testing Methodologies</b>
         </div>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>