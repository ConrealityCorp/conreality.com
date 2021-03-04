WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-28 08:32:39

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp
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
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp.lossy.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg
Dimension: 150 x 150
Output:    2982 bytes Y-U-V-All-PSNR 38.03 44.93 45.64   39.40 dB
           (1.06 bpp)
block count:  intra4:         90  (90.00%)
              intra16:        10  (10.00%)
              skipped:         0  (0.00%)
bytes used:  header:             55  (1.8%)
             mode-partition:    409  (13.7%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    2240 |      25 |      12 |       2 |    2279  (76.4%)
 intra16-coeffs:  |      27 |       0 |       6 |      13 |      46  (1.5%)
  chroma coeffs:  |     155 |       3 |       1 |       6 |     165  (5.5%)
    macroblocks:  |      89%|       3%|       3%|       5%|     100
      quantizer:  |      30 |      23 |      16 |      16 |
   filter level:  |      39 |       5 |      11 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    2422 |      28 |      19 |      21 |    2490  (83.5%)

Success
Reduction: 85% (went from 19 kb to 3 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -lossless -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-150x150.jpg.webp.lossless.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-150x150.jpg
Dimension: 150 x 150
Output:    21758 bytes (7.74 bpp)
Lossless-ARGB compressed size: 21758 bytes
  * Header size: 1730 bytes, image data size: 20003
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=0

Success
Reduction: -10% (went from 19 kb to 21 kb)

Picking lossy
cwebp succeeded :)

Converted image in 539 ms, reducing file size with 85% (went from 19 kb to 3 kb)
