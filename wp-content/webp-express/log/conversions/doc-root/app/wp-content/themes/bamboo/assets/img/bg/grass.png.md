WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-02-28 11:18:45

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp
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
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp.lossy.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png
Dimension: 1920 x 340 (with alpha)
Output:    109776 bytes Y-U-V-All-PSNR 46.53 47.71 46.47   46.69 dB
           (1.35 bpp)
block count:  intra4:        936  (35.45%)
              intra16:      1704  (64.55%)
              skipped:      1453  (55.04%)
bytes used:  header:            220  (0.2%)
             mode-partition:   5675  (5.2%)
             transparency:    80974 (61.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   10592 |     907 |     767 |     243 |   12509  (11.4%)
 intra16-coeffs:  |     541 |     192 |     126 |     103 |     962  (0.9%)
  chroma coeffs:  |    6537 |    1201 |    1112 |     533 |    9383  (8.5%)
    macroblocks:  |      37%|       6%|       7%|      49%|    2640
      quantizer:  |      20 |      16 |      13 |       8 |
   filter level:  |      55 |       4 |      35 |       6 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   17670 |    2300 |    2005 |     879 |   22854  (20.8%)
Lossless-alpha compressed size: 80973 bytes
  * Header size: 737 bytes, image data size: 80236
  * Lossless features used: PREDICTION
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   136

Success
Reduction: 75% (went from 437 kb to 107 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\grass.png.webp.lossless.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/grass.png
Dimension: 1920 x 340
Output:    184434 bytes (2.26 bpp)
Lossless-ARGB compressed size: 184434 bytes
  * Header size: 3745 bytes, image data size: 180663
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: 59% (went from 437 kb to 180 kb)

Picking lossy
cwebp succeeded :)

Converted image in 6853 ms, reducing file size with 75% (went from 437 kb to 107 kb)
