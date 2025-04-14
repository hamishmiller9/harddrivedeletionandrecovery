<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Methodologies - Testing the Effectiveness of Common Deletion Methods and Data Recoverability Post-Deletion</title>
    <link rel="stylesheet" href="../assets/style.css">  
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="content-wrapper">
        <?php include '../includes/header.php'; ?>
        <div class="main-content">
            <h2>Testing Methodologies</h2>
                <h3>Testing Environment and Specifications</h3>
                    <p>A physical desktop environment was utilised for testing the Windows-based deletion methods, solely for the purpose of this project. The desktop system features standard components capable of running Windows 11 that replicate a standard user’s device, and therefore enhancing the replicability of this project and applicability of results obtained into real-world findings.</p>
                    <p>The system configuration includes:</p>
                    <ul>
                        <li>AMD A10-7850K Central Processing Unit (CPU)</li>
                        <li>8 gigabytes (GB) of Random Access Memory</li>
                        <li>120 gigabytes (GB) Solid State Drive (SSD) for the operating system and software
                        <li>Physical destruction</li>
                    </ul>
                    <p>Whilst the testing was conducted on the referenced HDD, the SSD was included to separate the software being tested (for example, the operating system and the deletion tools) from the data on the HDD being retrieved. This mitigated the risk of any confusion and ensured the focus remained solely on testing the files on the HDD.</p>
                <h3>What are file systems?</h3>
                    <p>A file system is a structured method used by all operating systems to organise, store and retrieve data on a storage device. It manages how data is stored in files and directories, to ensure efficient access and retrieval. The three file systems evaluated in this project include the New Technology File System (NTFS), File Allocation Table 32-bit (FAT32) and Extended File Allocation Table (exFAT). These file systems were selected through their compatibility with modern Windows, as well as the distinct features they utilise which influence data storage and recoverability.</p>
                    <p>Using Windows 11, version 24H2 as the test environment further highlights the relevance of these file systems. Windows 11 supports all three file systems, allowing for users to format storage devices using NTFS, FAT32 or exFAT through Windows’ built-in Disk Management utility. This is demonstrated in Figure 3 – page 15. This flexibility ensures the results of this project are applicable to real-world scenarios, from internal drives utilising NTFS to portable media formatted with FAT32 or exFAT.</p>
                <h4>FAT32</h4>
                    <p>FAT32, introduced alongside Windows 95 in 1996 by Microsoft, is a 32-bit successor of the original File Allocation Table (FAT) file system. Although it is outdated by modern file system standards, FAT32 remains widely used through its ongoing and extensive compatibility with both legacy and modern hardware and software. Windows 11 and MacOS 15 Sequoia (latest versions) support formatting FAT32 up to 2 terabytes (TB), making it a viable choice for removable storage devices (USB flash drives, SD cards). FAT32 organises data into clusters of fixed sizes, determined by the partition size required. The File Allocation Table, at the start of the partition, maintains a list of clusters used by each file. Each cluster is assigned a specific address within the disk. The File Allocation Table is used to track the location of the data, alongside simple metadata including file names, size of the file and end-of-file indicators. FAT32’s structure allows users to access data directly, including post deletion (provided the clusters have not been overwritten.)</p>
                    <p>Despite its simplicity and extensive compatibility, FAT32 is limited by its maximum 4 gigabytes (GB) file size and a total partition size of 8 terabytes (TB). These limitations, in addition to a lack of modern features such as journaling or file permissions, potentially make FAT32 less suitable as a primary file system in 2025, however the file system has been covered due to its extensive continued use. </p>
                
                <h4>exFAT</h4>
                    <p>Extended File Allocation Table (exFAT) was introduced in 2006 by Microsoft, as a modern alternative to FAT32, designed to overcome its limitations without hindering the compatibility that FAT32 offers. exFAT was implemented into Windows XP through a late software update and officially integrated into Windows Vista with Service Pack 1 and widely adopted as the default solution for modern external storage devices (e.g. USB flash drives and SD cards) due to its ability to handle greater file and partition sizes compared to FAT32. Additionally, it is optimised in minimising write amplification, allowing for better life span of flash storage. Thus, making exFAT preferable over NTFS as removable storage as it offers much broader compatibility across different operating systems, games consoles, cameras and other digital devices.</p>
                    <p>A File Allocation Table is utilised by exFAT, in a similar fashion to FAT32 in which the location of data is tracked within clusters. However, exFAT addresses the limitations of FAT32 by supporting significantly larger file and partition sizes, with a theoretical maximum partition size of 128 petabytes. This ensure exFAT meets modern user requirements and expanding storage sizes. Despite its advancements, the lack of journaling, file permissions and encryption make exFAT less suitable as a primary file system solution than NTFS. </p>
                <h4>NTFS</h4>
                    <p>The New Technology File System (NTFS) was introduced in 1993 by Microsoft for the New Technology (NT) line of Windows operating systems. First, in Windows NT 3.1 and later integrated into Windows 2000 and XP. NTFS was developed to overcome the limitations of FAT (introduced in 1977) and FAT32 (introduced in 1996), of which were still being utilised for compatibility in previous Windows iterations. Whilst FAT32 improved upon FAT, it was still constrained by its design, lacking support for important modern security features and larger file sizes. </p>
                    <p>NTFS works similarly to FAT32 and exFAT, in that both organise data into clusters, with cluster size determined through the partition size. However, NTFS introduces a more advanced file management system through the Master File Table (MFT). The MFT is a more efficient indexing system that contains metadata about every file and directory in the file system. Each file on an NTFS partition has an entry in the MFT, including file attributes, timestamps, security descriptors and cluster mapping. The MFT also enhances file retrieval efficiency and reduces fragmentation, improving overall performance. </p>
                    <p>One of the fundamental changes NTFS introduced is journalling, which records changes to file metadata before completion. This feature enhances data integrity by significantly reducing the risk of corruption upon unexpected shutdowns. Additionally, NTFS introduced support for much larger disk partitions (theoretically up to 16 exabytes (EB), but constrained by Windows’ 256TB limit through cluster size limitations), improved metadata management, file compression, encryption and security, enhancing file organisation, reliability and security, making NTFS the default file system on Windows 11. </p>
                <h3>What files are being tested?</h3>
                    <p>To evaluate the effectiveness of deletion methods, a set of standardised test files were obtained to simulate real-world user data. Five differing file types were selected to represent commonly used formats, with differing data structures. The files utilised can be seen in the table below. </p>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Name of File</th>
                                <th>Size of File</th>
                                <th>Description of File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TESTDOC.doc</td>
                                <td>29 kilobytes</td>
                                <td>Microsoft Word document – commonly used for documentation</td>
                            </tr>
                            <tr>
                                <td>TESTPDF.pdf</td>
                                <td>73 kilobytes</td>
                                <td>Portable Document Format (PDF) – commonly used for documentation</td>
                            </tr>
                            <tr>
                                <td>TESTMP4.mp4</td>
                                <td>5,131 kilobytes</td>
                                <td>MPEG-4 Part 14 (MP4) – a commonly used video file format</td>
                            </tr>
                            <tr>
                                <td>TESTJPG.jpg</td>
                                <td>501 kilobytes</td>
                                <td>Joint Photographic Experts Group (JPEG) – a lossy compression format for digital images</td>
                            </tr>
                            <tr>
                                <td>TESTPNG.png</td>
                                <td>48 kilobytes</td>
                                <td>Portable Network Graphics (PNG) – a lossless image format for digital images</td>
                            </tr>
                        </tbody>
                    </table>
                <h2>Deletion Methods Tested</h2>
                <h3>Windows Built-in Tools (Recycle Bin, Disk Management)</h3>
                    <p>This project focuses upon the two most used deletion methods built into Windows 11, the Recycle Bin and Disk Management. These methods are integrated into the operating system and serve as a convenient solution acting as the first line of defence for users deleting files and preparing storage devices. </p>
                    <p>Recycle Bin is a system utility that temporarily stores user deleted files. Once a file is in the Recycle Bin, the user can restore the files to their original locations, or to remove them completely. This measure helps prevent accidental deletion of files and allows users an opportunity to review their deletion. When a file is removed from the Recycle Bin, the file’s reference is removed, resulting in the sectors containing the data being marked as available for new data. As previously mentioned, Microsoft claim the file is to be deleted permanently when emptied from the Recycle Bin. This section of the project provides users a better understanding of the limitations of the Recycle Bin as a deletion method and explores its effectiveness in secure erasure of data.</p>
                    <p>Disk Management is a built-in Windows utility that allows for creation, deletion, and formatting of partitions on both internal and external storage devices. The Quick Format option within Disk Management, is a commonly used method for preparing storage devices by setting a new file system structure or replacing an existing one. Whilst Quick Format appears to erase all data, it only removes the file system reference, despite its claim that “all data will be erased”.</p>
                    <p>It is essential for users to understand the limitations within Disk Management, particularly when preparing storage devices for disposal. Without the use of secure erasure, personal information remains susceptible to recovery.</p>
                <h3>Secure Deletion Software (Eraser, File Shredder, WipeFile)</h3>
                    <p>The software-based secure deletion tools chosen for this project are as follows; Eraser v6.0.2.994, File Shredder v2.5 and WipeFile v3.6. These tools were selected through their widespread availability for users, simple graphical user interface (GUI) and advertised thoroughness in achieving secure data deletion. These tools encompass a variety of widely used file sanitisation techniques, allowing for a thorough assessment of their efficacy in preventing data recovery.</p>
                    <p>All three of these tools operate by overwriting sectors of the hard disk drive (HDD) with random data or zeros. This method has been proven to be secure enough to effectively render deleted data unrecoverable, though the level of security varies depending on the specific overwriting method employed. </p>
                    <p>For this project, two overwriting algorithms will be chosen for each secure deletion software tool. This allows a wide range of algorithms, that slightly differ in operation, to be tested. The two chosen algorithms will consist of the default settings upon installation, and another that is more thorough in its algorithm. This allows for extensive testing of different overwriting algorithms used.</p>
                <h4>Eraser v6.0.2.994</h4>
                    <p>Eraser is a free to use, open-source secure deletion software created by The Eraser Project. It was released in 2003 for Windows XP has continuously received updates for compatibility with modern Windows. Eraser themselves relay the misconception of common deletion methods, and why secure deletion software is important. The Eraser Project state “Your first thought may be that when you ‘delete’ the file, the data is gone. Not quite, when you delete a file, the operating system does not really remove the file from the disk; it only removes the reference of the file from the file system table”. Eraser integrates a multitude of overwriting methods to achieve secure deletion and ensure previous data is inaccessible. </p>
                <h4>File Shredder v2.5</h4>
                    <p>File Shredder is free, open-source secure deletion tool designed for Windows NT through Windows 10, yet still functional on Windows 11 as of 2025. It features an easy-to-use GUI and supports several data overwriting methods. However, as an older program developed by a single creator, who explicitly states “Please note I can not give any kind of support for File Shredder” it may not be as robust or reliable as paid or regularly updated alternatives.</p>
                <h4>WipeFile v3.6</h4>
                    <p>WipeFile is a free secure deletion tool developed by Werner Rumpeltesz. Whilst not open source, it is available for Windows XP and later versions at no cost. Unlike more commercialised alternatives, WipeFile remains a lesser-known option but still claims to provide secure data deletion functionality. WipeFile is now considered a discontinued software yet is still available for use and provides a wide variety of overwriting techniques.</p> 
                <h3>Low-Level Formatting and Windows Diskpart</h3>
                    <p>Low-Level Formatting (LLF) is a data sanitisation process that involves formatting storage at a physical hardware level, rather than software level. LLF completely rewrites sectors and track boundaries on magnetic platters of HDDs rendering the storage device as new. Thus, theoretically rendering data unrecoverable. </p>
                    <p>However, LLF was never intended for general computing due to requiring specialised hardware and advanced technical knowledge to perform LLF adequately. The introduction of more efficient software-based secure data deletion methods, performing equivalent or better than LLF rendered it obsolete. Additionally, the time required to sanitise a drive and operational complexities with LLF have rendered it unsuitable for modern computing. Tools such as ATA Secure Erase and single-pass overwrites provide better or equal security without the complexity of physically altering a HDD. Modern, software approaches take much less time to complete and meet modern sanitation standards. </p>
                    <p>For the purposes of the project, Windows built-in utility Diskpart (specifically the command “clean all”) will be used as an alternative to an LLF approach. Whilst this approach doesn’t replicate LLF’s physical process of overwriting each sector, equivalent outcomes are achieved through logical means without the requirement of additional software. Thus, making it both a practical and efficient alternative for secure data deletion for users that may not want to download additional software. </p>
                <h3>Physical Destruction</h3>
                    <p>Physical destruction is considered the most effective method of ensuring data is permanently irrecoverable from storage devices. Unlike software-based data erasure methods, physical destruction of a HDD renders the storage device completely inoperable, eliminating the possibility of data recovery. </p>
                    <p>This method is often used by organisations disposing of highly sensitive or confidential data, where the risk of unauthorised access post deletion must be completely mitigated. The Information Commissioner’s Office (ICO) emphasise the importance of data destruction stating “Use and document secure disposal methods (e.g., data wiping, degaussing, or hardware shredding)”. </p>
                    <p>One widely adopted approach to physical destruction data shredding, involving mechanically shredding devices such as HDDs, SSDs and optical media into tiny pieces rendering data irretrievable. For this project, the HDD will be subjected to physical destruction through being dropped from a significant height, within a controlled environment. Thus, demonstrating the effectiveness of physically destroying a HDD as a secure data disposal method.</p>
                <h3>How was the test data recovered after deletion?</h3>
                    <p>The forensic tools used for evaluation consisted of OpenText Forensic EnCase V22.3, FTK Imager V4.7.1 and Autopsy V4.21.0. The choice to use these tools was based upon their industry standard status and slightly differentiating features, collectively providing a comprehensive assessment of data deletion methods. </p>
                    <p>The integration of these three forensic tools enhances the reliability and repeatability of the project’s results. OpenText Encase provides advanced features, whilst FTK Imager and Autopsy offer better accessibility and ease-of-use, ensuring that the methodology can be applied across a variety of environments. Through the strengths of these tools, this approach allows for replicable findings that are applicable to a broad user base. </p>
                <b>Please continue to Results of Testing</b>
            </div>
    </div>
</body>
</html>