WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-02-28 11:18:44

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
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
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp.lossy.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png
Dimension: 307 x 200 (with alpha)
Output:    20006 bytes Y-U-V-All-PSNR 44.63 42.88 42.79   43.95 dB
           (2.61 bpp)
block count:  intra4:        131  (50.38%)
              intra16:       129  (49.62%)
              skipped:        93  (35.77%)
bytes used:  header:            244  (1.2%)
             mode-partition:    753  (3.8%)
             transparency:    12205 (60.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    3656 |      73 |      84 |       0 |    3813  (19.1%)
 intra16-coeffs:  |     131 |       0 |       4 |       0 |     135  (0.7%)
  chroma coeffs:  |    2652 |      53 |      96 |       0 |    2801  (14.0%)
    macroblocks:  |      76%|       2%|       3%|      20%|     260
      quantizer:  |      16 |      13 |       9 |       8 |
   filter level:  |       5 |       3 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6439 |     126 |     184 |       0 |    6749  (33.7%)
Lossless-alpha compressed size: 12204 bytes
  * Header size: 363 bytes, image data size: 11841
  * Lossless features used: PREDICTION
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   136

Success
Reduction: 71% (went from 68 kb to 20 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\drone.png.webp.lossless.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/drone.png
Dimension: 307 x 200
Output:    35484 bytes (4.62 bpp)
Lossless-ARGB compressed size: 35484 bytes
  * Header size: 1190 bytes, image data size: 34268
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=0

Success
Reduction: 49% (went from 68 kb to 35 kb)

Picking lossy
cwebp succeeded :)

Converted image in 5715 ms, reducing file size with 71% (went from 68 kb to 20 kb)
