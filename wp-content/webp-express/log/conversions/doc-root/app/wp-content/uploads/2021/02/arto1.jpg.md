WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-28 08:32:24

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp
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
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp.lossy.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg
Dimension: 270 x 270
Output:    2140 bytes Y-U-V-All-PSNR 41.60 45.98 46.06   42.64 dB
           (0.23 bpp)
block count:  intra4:        127  (43.94%)
              intra16:       162  (56.06%)
              skipped:        72  (24.91%)
bytes used:  header:             26  (1.2%)
             mode-partition:    639  (29.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     787 |     100 |     118 |      17 |    1022  (47.8%)
 intra16-coeffs:  |      71 |      23 |      24 |      24 |     142  (6.6%)
  chroma coeffs:  |     153 |      36 |      37 |      55 |     281  (13.1%)
    macroblocks:  |      39%|       9%|      13%|      38%|     289
      quantizer:  |      39 |      32 |      24 |      16 |
   filter level:  |      24 |      20 |      16 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1011 |     159 |     179 |      96 |    1445  (67.5%)

Success
Reduction: 94% (went from 38 kb to 2 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -lossless -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\arto1.jpg.webp.lossless.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/arto1.jpg
Dimension: 270 x 270
Output:    42806 bytes (4.70 bpp)
Lossless-ARGB compressed size: 42806 bytes
  * Header size: 1506 bytes, image data size: 41275
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=0

Success
Reduction: -11% (went from 38 kb to 42 kb)

Picking lossy
cwebp succeeded :)

Converted image in 510 ms, reducing file size with 94% (went from 38 kb to 2 kb)
