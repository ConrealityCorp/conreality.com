WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-28 08:32:47

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp
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
- source: X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg
- destination: X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp
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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp.lossy.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg
Dimension: 443 x 440
Output:    12444 bytes Y-U-V-All-PSNR 38.98 45.88 46.52   40.35 dB
           (0.51 bpp)
block count:  intra4:        529  (67.47%)
              intra16:       255  (32.53%)
              skipped:        15  (1.91%)
bytes used:  header:             69  (0.6%)
             mode-partition:   2280  (18.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    7857 |     140 |     103 |      98 |    8198  (65.9%)
 intra16-coeffs:  |     479 |     168 |     168 |     231 |    1046  (8.4%)
  chroma coeffs:  |     626 |      40 |      40 |     116 |     822  (6.6%)
    macroblocks:  |      66%|       7%|       6%|      22%|     784
      quantizer:  |      34 |      26 |      19 |      16 |
   filter level:  |      21 |      23 |      17 |      23 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    8962 |     348 |     311 |     445 |   10066  (80.9%)

Success
Reduction: 90% (went from 118 kb to 12 kb)

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
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -lossless -m 6 -low_memory "X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg" -o "X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app/wp-content/webp-express/webp-images/uploads/2021\02\contacts-443x440.jpg.webp.lossless.webp'
File:      X:\Openserver\domains\conreality.loc\app/wp-content/uploads/2021/02/contacts-443x440.jpg
Dimension: 443 x 440
Output:    136748 bytes (5.61 bpp)
Lossless-ARGB compressed size: 136748 bytes
  * Header size: 2421 bytes, image data size: 134302
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: -13% (went from 118 kb to 134 kb)

Picking lossy
cwebp succeeded :)

Converted image in 717 ms, reducing file size with 90% (went from 118 kb to 12 kb)
