WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-03-10 12:54:19

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.2
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/uploads/2021/03/shumanskyi.com004-300x200.jpg
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/uploads/2021\03\shumanskyi.com004-300x200.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "lossy"
- metadata: "none"
- quality: 100
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/wp-content/uploads/2021/03/shumanskyi.com004-300x200.jpg
- destination: X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/uploads/2021\03\shumanskyi.com004-300x200.jpg.webp
- encoding: "lossy"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- quality: 100
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- near-lossless: 60
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

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
Quality: 100. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
X:\Openserver\domains\conreality.loc\app\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 100 -alpha_q "85" -m 6 -low_memory "[doc-root]/app/wp-content/uploads/2021/03/shumanskyi.com004-300x200.jpg" -o "X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/uploads/2021\03\shumanskyi.com004-300x200.jpg.webp" 2>&1 2>&1

*Output:* 
Saving file 'X:\Openserver\domains\conreality.loc\app\wp-content\webp-express/webp-images/uploads/2021\03\shumanskyi.com004-300x200.jpg.webp'
File:      [doc-root]/app/wp-content/uploads/2021/03/shumanskyi.com004-300x200.jpg
Dimension: 300 x 200
Output:    21176 bytes Y-U-V-All-PSNR 52.27 53.37 52.92   52.54 dB
           (2.82 bpp)
block count:  intra4:        238  (96.36%)
              intra16:         9  (3.64%)
              skipped:         0  (0.00%)
bytes used:  header:            419  (2.0%)
             mode-partition:   1315  (6.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   15089 |       0 |       0 |       0 |   15089  (71.3%)
 intra16-coeffs:  |     108 |       0 |       0 |       0 |     108  (0.5%)
  chroma coeffs:  |    4213 |       0 |       0 |       0 |    4213  (19.9%)
    macroblocks:  |      100%|       0%|       0%|       0%|     247
      quantizer:  |       0 |       0 |       0 |       0 |
   filter level:  |       0 |       0 |       0 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   19410 |       0 |       0 |       0 |   19410  (91.7%)

Success
cwebp succeeded :)

Converted image in 432 ms, reducing file size with 76% (went from 87 kb to 21 kb)
