WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-02-28 11:17:33

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp
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
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp.lossy.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png
Dimension: 680 x 796 (with alpha)
Output:    83054 bytes Y-U-V-All-PSNR 43.16 41.66 41.55   42.58 dB
           (1.23 bpp)
block count:  intra4:       1273  (59.21%)
              intra16:       877  (40.79%)
              skipped:       519  (24.14%)
bytes used:  header:            499  (0.6%)
             mode-partition:   6936  (8.4%)
             transparency:     8895 (76.8 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   38381 |     904 |    1195 |     292 |   40772  (49.1%)
 intra16-coeffs:  |     613 |     138 |     177 |      68 |     996  (1.2%)
  chroma coeffs:  |   23026 |     659 |     970 |     243 |   24898  (30.0%)
    macroblocks:  |      63%|       5%|       9%|      23%|    2150
      quantizer:  |      17 |      13 |       9 |       8 |
   filter level:  |       5 |       3 |       5 |       6 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   62020 |    1701 |    2342 |     603 |   66666  (80.3%)
Lossless-alpha compressed size: 8894 bytes
  * Header size: 87 bytes, image data size: 8807
  * Precision Bits: histogram=4 transform=4 cache=0
  * Palette size:   132

Success
Reduction: 89% (went from 734 kb to 81 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\soldier.png.webp.lossless.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/soldier.png
Dimension: 680 x 796
Output:    373174 bytes (5.52 bpp)
Lossless-ARGB compressed size: 373174 bytes
  * Header size: 5591 bytes, image data size: 367558
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: 50% (went from 734 kb to 364 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2423 ms, reducing file size with 89% (went from 734 kb to 81 kb)
