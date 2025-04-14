<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Results - Testing the Effectiveness of Common Deletion Methods and Data Recoverability Post-Deletion</title>
    <link rel="stylesheet" href="../assets/style.css">  
</head>
<body>
    <?php include '../includes/navbar.php'; ?>
    <div class="content-wrapper">
        <?php include '../includes/header.php'; ?>
        <div class="main-content">
        <h2>Results of Testing Deletion Methods</h2>
        <p>Below are tables containing the results gathered from this project. The results show hash values, time taken for deletion and recoverability across different file systems. Please see the <b>Conclusions and Recommendations</b> page on the left-hand side for more insight into testing. </p>
        <p>Additionally, please see Chain of Custody below results for information on gathering the results.</p>
        <h3>Recycle Bin Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>Instant</td>
            <td>b8badebd4dc7448756d0c4e5e905c3ebfae0049d</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>Instant</td>
            <td>5b74605b3cb97f634f75a40b90d6d74a2b4de08d</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>Instant</td>
            <td>74901429bd634df4fa351ddb3f0144db2112402c</td>
            <td>Yes</td>
            </tr>
        </tbody>
        </table>
        <h3>Disk Management - Quick Format Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>1 second</td>
            <td>f25d1c8fd4d7487044ee6b8f2e8e803e05e70090</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>1 second</td>
            <td>cdacab7502ea1b3862078121b2e76df071d0feaf</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>1 second</td>
            <td>521fa97eea3f925acc2ebca008dcd94d5ff3bcc9</td>
            <td>Yes</td>
            </tr>
        </tbody>
        </table>
        <h3>Eraser Pseudorandom Data Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>12 seconds</td>
            <td>01cbc8ffc3b0e460e9070b148dc2e30a1ede8c78</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>12 seconds</td>
            <td>52ed58de4aa0e981676dbae2e5360679400b4c53</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>12 seconds</td>
            <td>38f06d572bafbd9b4a2965e37b480361ddfaf877</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>Eraser British HMG IS5 Baseline Data Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>13 seconds</td>
            <td>d04df27549d239ad29312c844b44b65e141dc748</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>13 seconds</td>
            <td>d04df27549d239ad29312c844b44b65e141dc748</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>13 seconds</td>
            <td>d04df27549d239ad29312c844b44b65e141dc748</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>File Shredder DoD 5220-22.M Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>1 second</td>
            <td>17b7ba96f687382e3311f29b11d52ebe5467a839</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>1 second</td>
            <td>ec1698b027283146f5d0b71e83f499f0ec3a2cf9</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>1 second</td>
            <td>ee1444b66df0fc6a083a2547062479d061a2f872</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>File Shredder Secure Erasing Algorithm Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>1 second</td>
            <td>31a58c587f336977b073caed384727f4da691407</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>1 second</td>
            <td>3d3e6609dc3e4369276e5dca13e5321cced25e56</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>1 second</td>
            <td>6035693c9a2151bac4bb1617d461483e64bf566d</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>WipeFile Simple Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>1 second</td>
            <td>170ca820e28df528c1a51cfdb3b1cffda2050f55</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>1 second</td>
            <td>3a69a383b8ea54baac3b234bacc29df496738e29</td>
            <td>Yes</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>1 second</td>
            <td>252a807e7c723835689ead65f778d7931ef6f8f4</td>
            <td>Yes</td>
            </tr>
        </tbody>
        </table>
        <h3>WipeFile NATO Standard Deletion Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>1 second</td>
            <td>0b6cd764831145b7b94ac4a348d0eeb135607f5e</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>1 second</td>
            <td>09512580da99b03ee5ceed0a098f273c50ecb77e</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>1 second</td>
            <td>3922b1eed147d99c84ed0550d8adb39f15fffc86</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>Windows Diskpart – “clean all” Results</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>2 hours</td>
            <td>b0948c5f66dd45b798b766c2dcb40c165fdbaf60</td>
            <td>No</td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393</td>
            <td>2 hours</td>
            <td>72b548748c52c073406e839ce1b5b87a48ea3de3</td>
            <td>No</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>2 hours</td>
            <td>1952b209fd5b9f7b25cc70ed9a672ee1c9a10e1f</td>
            <td>No</td>
            </tr>
        </tbody>
        </table>
        <h3>Physical Destruction</h3>
        <table border="1">
        <thead>
            <tr>
            <th>File System Tested</th>
            <th>Initial Hash Value (SHA-256)</th>
            <th>Time Taken to Delete</th>
            <th>Hash Value After (SHA-256)</th>
            <th>Was Data Recoverable?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>FAT32</td>
            <td>4c645b2a2879de5575bcdc837887dfa8e31358a2</td>
            <td>Instant</td>
            <td>N/A</td>
            <td>No – device would not connect</td></td>
            </tr>
            <tr>
            <td>EXFAT</td>
            <td>d3057827196c1e866a1fc9b39a0cc8f7830d2393
            <td>N/A</td>
            <td>N/A</td>
            <td>No – device would not connect</td>
            </tr>
            <tr>
            <td>NTFS</td>
            <td>996f6f85b7fe023a6c7a9c04dcf9ba10d14d7867</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>No – device would not connect</td>
            </tr>
            </tbody>
            </table>
            <br>
            <b>Please see Chain of Custody for more information on testing, or Conclusions and Recommendations for more insight on these results. </b>
        </div>
    </div>
</body>
</html>