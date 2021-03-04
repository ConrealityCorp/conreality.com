WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-02-28 11:18:42

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp
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
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp.lossy.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png
Dimension: 439 x 102 (with alpha)
Output:    7084 bytes Y-U-V-All-PSNR 46.65 58.24 55.86   48.21 dB
           (1.27 bpp)
block count:  intra4:         70  (35.71%)
              intra16:       126  (64.29%)
              skipped:       117  (59.69%)
bytes used:  header:             83  (1.2%)
             mode-partition:    365  (5.2%)
             transparency:     4689 (61.1 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1674 |       0 |       0 |       0 |    1674  (23.6%)
 intra16-coeffs:  |      39 |      10 |       0 |       0 |      49  (0.7%)
  chroma coeffs:  |     166 |       0 |       0 |       0 |     166  (2.3%)
    macroblocks:  |      75%|       1%|       0%|      24%|     196
      quantizer:  |      17 |      13 |       9 |       8 |
   filter level:  |       5 |       3 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1879 |      10 |       0 |       0 |    1889  (26.7%)
Lossless-alpha compressed size: 4688 bytes
  * Header size: 223 bytes, image data size: 4465
  * Lossless features used: PREDICTION
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   136

Success
Reduction: 60% (went from 17 kb to 7 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\bullet.png.webp.lossless.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/bullet.png
Dimension: 439 x 102
Output:    6564 bytes (1.17 bpp)
Lossless-ARGB compressed size: 6564 bytes
  * Header size: 501 bytes, image data size: 6038
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=9

Success
Reduction: 63% (went from 17 kb to 6 kb)

Picking lossless
cwebp succeeded :)

Converted image in 3707 ms, reducing file size with 63% (went from 17 kb to 6 kb)
