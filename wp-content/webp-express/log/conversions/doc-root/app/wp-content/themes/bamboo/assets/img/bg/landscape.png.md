WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-02-28 11:18:43

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp
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
- source: [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp.lossy.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png
Dimension: 1920 x 1800 (with alpha)
Output:    317368 bytes Y-U-V-All-PSNR 42.94 78.44 82.98   44.70 dB
           (0.73 bpp)
block count:  intra4:       7177  (52.93%)
              intra16:      6383  (47.07%)
              skipped:      5912  (43.60%)
bytes used:  header:            332  (0.1%)
             mode-partition:  36918  (11.6%)
             transparency:      161 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |  274677 |     343 |     359 |     495 |  275874  (86.9%)
 intra16-coeffs:  |    2896 |     291 |     434 |     296 |    3917  (1.2%)
  chroma coeffs:  |     102 |       2 |       2 |       3 |     109  (0.0%)
    macroblocks:  |      54%|       1%|       2%|      43%|   13560
      quantizer:  |      19 |      14 |      11 |       8 |
   filter level:  |       5 |       3 |       2 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  277675 |     636 |     795 |     794 |  279900  (88.2%)
Lossless-alpha compressed size: 160 bytes
  * Header size: 14 bytes, image data size: 146
  * Lossless features used: PALETTE
  * Precision Bits: histogram=6 transform=4 cache=0
  * Palette size:   1

Success
Reduction: 49% (went from 606 kb to 310 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/themes/bamboo\assets\img\bg\landscape.png.webp.lossless.webp'
File:      [doc-root]/app/wp-content/themes/bamboo/assets/img/bg/landscape.png
Dimension: 1920 x 1800
Output:    582502 bytes (1.35 bpp)
Lossless-ARGB compressed size: 582502 bytes
  * Header size: 1210 bytes, image data size: 581266
  * Lossless features used: PALETTE
  * Precision Bits: histogram=6 transform=4 cache=0
  * Palette size:   174

Success
Reduction: 6% (went from 606 kb to 569 kb)

Picking lossy
cwebp succeeded :)

Converted image in 4906 ms, reducing file size with 49% (went from 606 kb to 310 kb)
