function Convert() {

    let finput = document.getElementById('finput').value;
    let rdbtn1 = document.getElementsByClassName('rdbtn1');
    let rdbtn2 = document.getElementsByClassName('rdbtn2');
    if (rdbtn1[0].checked) {
        if (rdbtn2[0].checked) {
            document.getElementById('sinput').value = 1 * finput + "km";
        } else
            if (rdbtn2[1].checked) {
                document.getElementById('sinput').value = 1000 * finput + "m";
            } else
                if (rdbtn2[2].checked) {
                    document.getElementById('sinput').value = 10000 * finput + "dm";
                } else
                    if (rdbtn2[3].checked) {
                        document.getElementById('sinput').value = 100000 * finput + "cm";
                    } else
                        if (rdbtn2[4].checked) {
                            document.getElementById('sinput').value = 1000000 * finput + "mm";
                        } else
                            if (rdbtn2[5].checked) {
                                document.getElementById('sinput').value = 1000000000 * finput + "μm";
                            } else
                                if (rdbtn2[6].checked) {
                                    document.getElementById('sinput').value = 1000000000000 * finput + "nm";
                                }
    }
    else
        if (rdbtn1[1].checked) {
            if (rdbtn2[0].checked) {
                document.getElementById('sinput').value = finput / 1000 + "km";
            } else
                if (rdbtn2[1].checked) {
                    document.getElementById('sinput').value = 1 * finput + "m";
                } else
                    if (rdbtn2[2].checked) {
                        document.getElementById('sinput').value = 10 * finput + "dm";
                    } else
                        if (rdbtn2[3].checked) {
                            document.getElementById('sinput').value = 100 * finput + "cm";
                        } else
                            if (rdbtn2[4].checked) {
                                document.getElementById('sinput').value = 1000 * finput + "mm";
                            } else
                                if (rdbtn2[5].checked) {
                                    document.getElementById('sinput').value = 1000000 * finput + "μm";
                                } else
                                    if (rdbtn2[6].checked) {
                                        document.getElementById('sinput').value = 1000000000 * finput + "nm";
                                    }
        }
        else
            if (rdbtn1[2].checked) {
                if (rdbtn2[0].checked) {
                    document.getElementById('sinput').value = finput / 10000 + "km";
                } else
                    if (rdbtn2[1].checked) {
                        document.getElementById('sinput').value = finput / 10 + "m";
                    } else
                        if (rdbtn2[2].checked) {
                            document.getElementById('sinput').value = 1 * finput + "dm";
                        } else
                            if (rdbtn2[3].checked) {
                                document.getElementById('sinput').value = 10 * finput + "cm";
                            } else
                                if (rdbtn2[4].checked) {
                                    document.getElementById('sinput').value = 100 * finput + "mm";
                                } else
                                    if (rdbtn2[5].checked) {
                                        document.getElementById('sinput').value = 100000 * finput + "μm";
                                    } else
                                        if (rdbtn2[6].checked) {
                                            document.getElementById('sinput').value = 100000000 * finput + "nm";
                                        }
            }
            else
                if (rdbtn1[3].checked) {
                    if (rdbtn2[0].checked) {
                        document.getElementById('sinput').value = finput / 100000 + "km";
                    } else
                        if (rdbtn2[1].checked) {
                            document.getElementById('sinput').value = finput / 100 + "m";
                        } else
                            if (rdbtn2[2].checked) {
                                document.getElementById('sinput').value = finput / 10 + "dm";
                            } else
                                if (rdbtn2[3].checked) {
                                    document.getElementById('sinput').value = 1 * finput + "cm";
                                } else
                                    if (rdbtn2[4].checked) {
                                        document.getElementById('sinput').value = 10 * finput + "mm";
                                    } else
                                        if (rdbtn2[5].checked) {
                                            document.getElementById('sinput').value = 100000 * finput + "μm";
                                        } else
                                            if (rdbtn2[6].checked) {
                                                document.getElementById('sinput').value = 100000000 * finput + "nm";
                                            }
                }
                else
                    if (rdbtn1[4].checked) {
                        if (rdbtn2[0].checked) {
                            document.getElementById('sinput').value = finput / 1000000 + "km";
                        } else
                            if (rdbtn2[1].checked) {
                                document.getElementById('sinput').value = finput / 1000 + "m";
                            } else
                                if (rdbtn2[2].checked) {
                                    document.getElementById('sinput').value = finput / 100 + "dm";
                                } else
                                    if (rdbtn2[3].checked) {
                                        document.getElementById('sinput').value = finput / 10 + "cm";
                                    } else
                                        if (rdbtn2[4].checked) {
                                            document.getElementById('sinput').value = 1 * finput + "mm";
                                        } else
                                            if (rdbtn2[5].checked) {
                                                document.getElementById('sinput').value = 10000 * finput + "μm";
                                            } else
                                                if (rdbtn2[6].checked) {
                                                    document.getElementById('sinput').value = 1000000 * finput + "nm";
                                                }
                    }
                    else
                        if (rdbtn1[5].checked) {
                            if (rdbtn2[0].checked) {
                                document.getElementById('sinput').value = finput / 1000000000 + "km";
                            } else
                                if (rdbtn2[1].checked) {
                                    document.getElementById('sinput').value = finput / 1000000 + "m";
                                } else
                                    if (rdbtn2[2].checked) {
                                        document.getElementById('sinput').value = finput / 100000 + "dm";
                                    } else
                                        if (rdbtn2[3].checked) {
                                            document.getElementById('sinput').value = finput / 10000 + "cm";
                                        } else
                                            if (rdbtn2[4].checked) {
                                                document.getElementById('sinput').value = finput / 1000 + "mm";
                                            } else
                                                if (rdbtn2[5].checked) {
                                                    document.getElementById('sinput').value = 1 * finput + "μm";
                                                } else
                                                    if (rdbtn2[6].checked) {
                                                        document.getElementById('sinput').value = 1000 * finput + "nm";
                                                    }
                        }
                        else
                            if (rdbtn1[6].checked) {
                                if (rdbtn2[0].checked) {
                                    document.getElementById('sinput').value = finput / 1000000000000 + "km";
                                } else
                                    if (rdbtn2[1].checked) {
                                        document.getElementById('sinput').value = finput / 1000000000 + "m";
                                    } else
                                        if (rdbtn2[2].checked) {
                                            document.getElementById('sinput').value = finput / 100000000 + "dm";
                                        } else
                                            if (rdbtn2[3].checked) {
                                                document.getElementById('sinput').value = finput / 10000000 + "cm";
                                            } else
                                                if (rdbtn2[4].checked) {
                                                    document.getElementById('sinput').value = finput / 1000000 + "mm";
                                                } else
                                                    if (rdbtn2[5].checked) {
                                                        document.getElementById('sinput').value = finput / 10000 + "μm";
                                                    } else
                                                        if (rdbtn2[6].checked) {
                                                            document.getElementById('sinput').value = 1 * finput + "nm";
                                                        }
                            }
}