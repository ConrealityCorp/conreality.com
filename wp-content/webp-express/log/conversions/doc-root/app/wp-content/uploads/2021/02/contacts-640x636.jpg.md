WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-28 08:32:50

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 100
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 100
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
Trying to convert by executing the following command:
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp.lossy.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg
Dimension: 640 x 636
Output:    19728 bytes Y-U-V-All-PSNR 39.32 46.49 47.17   40.71 dB
           (0.39 bpp)
block count:  intra4:        951  (59.44%)
              intra16:       649  (40.56%)
              skipped:        46  (2.88%)
bytes used:  header:             95  (0.5%)
             mode-partition:   4091  (20.7%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   11448 |     326 |     195 |     142 |   12111  (61.4%)
 intra16-coeffs:  |     802 |     299 |     307 |     585 |    1993  (10.1%)
  chroma coeffs:  |     988 |      73 |      81 |     268 |    1410  (7.1%)
    macroblocks:  |      58%|       7%|       7%|      28%|    1600
      quantizer:  |      36 |      28 |      20 |      16 |
   filter level:  |      31 |      18 |      23 |      19 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   13238 |     698 |     583 |     995 |   15514  (78.6%)

Success
Reduction: 91% (went from 219 kb to 19 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -lossless -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-640x636.jpg.webp.lossless.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-640x636.jpg
Dimension: 640 x 636
Output:    252976 bytes (4.97 bpp)
Lossless-ARGB compressed size: 252976 bytes
  * Header size: 3557 bytes, image data size: 249393
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: -13% (went from 219 kb to 247 kb)

Picking lossy
cwebp succeeded :)

Converted image in 945 ms, reducing file size with 91% (went from 219 kb to 19 kb)
